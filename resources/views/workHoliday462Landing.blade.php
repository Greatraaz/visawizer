@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')

@php
    $countries = \App\Support\StudyTopicData::countries();
    $wh462Img = 'assets/imgs/visitor/work-holiday-462';
    $img = [
        'hero_bg' => $wh462Img.'/hero-bg.webp',
        'intro' => $wh462Img.'/intro-suit.webp',
        'profile' => $wh462Img.'/profile.webp',
        'strategy' => $wh462Img.'/strategy.webp',
        'cta_bg' => $wh462Img.'/hero-bg.webp',
    ];
    $hero = [
        'tagline' => 'Work. Travel. Explore Australia.',
        'heading' => 'Apply for Australia Work and Holiday Visa Subclass 462 with Expert Guidance',
        'subheading' => 'Planning to travel, work, and experience Australia? Visawizer helps eligible young travellers understand requirements, prepare documents, and apply with confidence.',
        'content' => 'The Australia Work and Holiday Visa Subclass 462 is designed for eligible young travellers who want to visit Australia for an extended holiday and support their stay through short-term work. But eligibility can vary by passport, age, education, English ability, funds, and country-specific rules.',
        'content2' => 'Visawizer helps you check your eligibility, understand the process, prepare your documents, and avoid common mistakes before applying.',
        'primary_cta' => 'Book Appointment',
        'secondary_cta' => 'Submit Enquiry',
        'micro_cta' => 'Not sure if you qualify? Get a quick eligibility review.',
    ];
    $form = [
        'heading' => 'Check Your 462 Visa Eligibility',
        'subheading' => 'Share your details and our team will guide you on the next step.',
        'button' => 'Get My Eligibility Checked',
        'disclaimer' => 'Submitting this form does not guarantee visa approval. Eligibility depends on current Australian Government rules, country-specific criteria, and individual circumstances.',
    ];
    $overview = [
        'tagline' => 'Visa 462 at a glance',
        'heading' => 'What is the Work and Holiday Visa Subclass 462?',
        'subheading' => 'A short-term opportunity to travel, work, and experience life in Australia.',
        'content' => 'The Work and Holiday Visa Subclass 462 allows eligible young adults from participating countries to enjoy an extended holiday in Australia and work during their stay to help fund their travel. It is not a permanent migration visa, but it can be a life-changing opportunity to explore Australia, gain international exposure, and experience a new culture.',
        'cards' => [
            ['title' => 'Purpose', 'text' => 'Holiday in Australia with permission to work during your stay.', 'icon' => 'fa-light fa-plane-departure', 'image' => $wh462Img.'/doc-travel.webp'],
            ['title' => 'Best For', 'text' => 'Young travellers from eligible countries who want travel plus short-term work experience.', 'icon' => 'fa-light fa-users', 'image' => $wh462Img.'/profile.webp'],
            ['title' => 'Key Focus', 'text' => 'Eligibility, passport country, age, funds, education, English, and documentation.', 'icon' => 'fa-light fa-passport', 'image' => $wh462Img.'/doc-identity.webp'],
            ['title' => 'Support Needed', 'text' => 'Correct visa selection, document preparation, application review, and guidance.', 'icon' => 'fa-light fa-file-lines', 'image' => $wh462Img.'/support.webp'],
        ],
    ];
    $who = [
        'tagline' => 'Is this visa for you?',
        'heading' => 'This pathway may suit you if you want more than a tourist visit',
        'subheading' => 'The 462 visa is ideal for eligible travellers who want to explore Australia while having the flexibility to work.',
        'content' => 'You may consider the Subclass 462 visa if you are a young traveller from an eligible country, want to stay in Australia longer than a standard tourist visit, and may want to work during your stay to support your travel expenses.',
        'points' => [
            'You want an extended holiday in Australia',
            'You are from a participating country',
            'You meet the age requirements',
            'You can show sufficient funds',
            'You meet education and English requirements, where applicable',
            'You want short-term work flexibility during your stay',
            'You want a structured visa pathway instead of applying casually',
        ],
        'cta_text' => 'Unsure whether 462 or 417 applies to you?',
        'cta_button' => 'Ask Visawizer',
    ];
    $eligibility = [
        'tagline' => 'Check before applying',
        'heading' => 'Key eligibility factors for Visa 462',
        'subheading' => 'Every applicant should review eligibility carefully before lodging an application.',
        'content' => 'The 462 visa may look simple, but eligibility is not the same for every applicant. Your passport country, age, education, English ability, funds, previous visa history, and supporting documents can all affect your application.',
        'factors' => [
            ['title' => 'Passport Country', 'text' => 'You must hold a passport from an eligible participating country.', 'icon' => 'fa-light fa-passport'],
            ['title' => 'Age Requirement', 'text' => 'The visa is designed for eligible young adults. Age limits should be verified based on the current official rules.', 'icon' => 'fa-light fa-calendar'],
            ['title' => 'Education Requirement', 'text' => 'Some passport countries may have specific education requirements.', 'icon' => 'fa-light fa-graduation-cap'],
            ['title' => 'English Requirement', 'text' => 'Some applicants may need to provide English language evidence.', 'icon' => 'fa-light fa-language'],
            ['title' => 'Funds Evidence', 'text' => 'You may need to show that you have enough money to support yourself at the beginning of your stay.', 'icon' => 'fa-light fa-wallet'],
            ['title' => 'Previous Visa History', 'text' => 'Your previous Australian visa history may affect eligibility for first, second, or third Work and Holiday visa options.', 'icon' => 'fa-light fa-clock-rotate-left'],
            ['title' => 'Health and Character', 'text' => 'Applicants must meet Australia\'s health and character requirements.', 'icon' => 'fa-light fa-heart-pulse'],
        ],
        'cta' => 'Check My Eligibility',
    ];
    $guidance = [
        'tagline' => 'Avoid avoidable mistakes',
        'heading' => 'A simple-looking visa can still go wrong with weak preparation',
        'subheading' => 'Many applicants make mistakes because they assume the 462 visa is only an online form.',
        'content' => 'Even when the application process appears straightforward, errors in eligibility, document uploads, visa history, country-specific conditions, or funds evidence can create problems.',
        'content2' => 'Guidance helps you avoid confusion, organise supporting documents, and prepare your file in a more structured way before submission.',
        'mistakes_heading' => 'Common application mistakes:',
        'mistakes' => [
            'Choosing the wrong visa subclass', 'Confusing 462 with 417', 'Not checking passport country eligibility',
            'Submitting weak funds evidence', 'Missing education or English documents', 'Not understanding previous visa conditions',
            'Applying without checking current country caps or availability', 'Giving inconsistent travel or personal information',
        ],
        'cta' => 'Review My Documents',
    ];
    $documents = [
        'tagline' => 'Prepare your file properly',
        'heading' => 'Documents you may need for a 462 visa application',
        'subheading' => 'Required documents can vary by country and applicant profile, but a well-organised file is always important.',
        'content' => 'A strong application starts with clean documentation. Visawizer helps you understand what may be required based on your profile and country.',
        'categories' => [
            ['title' => 'Identity Documents', 'text' => 'Passport, national ID, birth certificate, photographs, name-change documents if applicable.', 'image' => $wh462Img.'/doc-identity.webp'],
            ['title' => 'Education Documents', 'text' => 'Degree, diploma, transcripts, certificates, or other education proof where required.', 'image' => $wh462Img.'/doc-education.webp'],
            ['title' => 'English Evidence', 'text' => 'English test result or eligible proof, where applicable.', 'image' => $wh462Img.'/doc-english.webp'],
            ['title' => 'Funds Evidence', 'text' => 'Bank statements or financial records showing ability to support your initial stay.', 'image' => $wh462Img.'/doc-funds.webp'],
            ['title' => 'Travel Plan', 'text' => 'Basic travel intention, planned arrival period, and purpose of visit.', 'image' => $wh462Img.'/doc-travel.webp'],
            ['title' => 'Previous Visa Records', 'text' => 'Any previous Australian visa history, refusals, cancellations, or overstays should be reviewed.', 'image' => $wh462Img.'/doc-visa-records.webp'],
            ['title' => 'Health and Character Documents', 'text' => 'Police checks, medical exams, or other evidence if required.', 'image' => $wh462Img.'/doc-health.webp'],
        ],
        'cta' => 'Get Document Checklist',
    ];
    $process = [
        'tagline' => 'Guided step by step',
        'heading' => 'How Visawizer helps you apply for Visa 462',
        'subheading' => 'From eligibility review to document preparation, we guide your application journey with clarity.',
        'steps' => [
            ['title' => 'Initial Enquiry', 'text' => 'You fill out the top form or book an appointment with our team.', 'image' => $wh462Img.'/process-enquiry.webp'],
            ['title' => 'Eligibility Review', 'text' => 'We check your passport country, age, education, English, funds, and visa history.', 'image' => $wh462Img.'/process-eligibility.webp'],
            ['title' => 'Document Checklist', 'text' => 'We provide a clear list of documents based on your profile.', 'image' => $wh462Img.'/process-checklist.webp'],
            ['title' => 'Application Preparation', 'text' => 'We help organise your information and reduce avoidable mistakes.', 'image' => $wh462Img.'/process-preparation.webp'],
            ['title' => 'Review Before Submission', 'text' => 'We review key details and supporting documents before lodgement.', 'image' => $wh462Img.'/process-review.webp'],
            ['title' => 'Post-Submission Guidance', 'text' => 'We help you understand updates, further information requests, and next steps.', 'image' => $wh462Img.'/process-guidance.webp'],
        ],
        'cta' => 'Start My 462 Visa Process',
    ];
    $comparison = [
        'tagline' => 'Choose the correct pathway',
        'heading' => 'Is Visa 462 the right option for your travel plan?',
        'subheading' => 'Choosing the wrong short-stay visa can create unnecessary delays or refusal risks.',
        'intro' => 'The right visa depends on your nationality, travel purpose, age, work intention, documents, and future plans. Visawizer helps you identify the correct pathway before you apply.',
        'options' => [
            [
                'title' => 'Visitor Visa 600',
                'text' => 'Best for tourism, family visits, or business visitor purposes where work is not intended.',
                'image' => $wh462Img.'/visa-visitor-600.webp',
                'icon' => 'assets/images/icon/workplace-business.svg',
                'gradient' => '90deg, var(--wh462-accent), rgba(0, 0, 0, 0)',
                'align' => 'left',
            ],
            [
                'title' => 'Working Holiday Visa 417',
                'text' => 'A similar working holiday pathway, but for different eligible passport countries.',
                'image' => $wh462Img.'/visa-417.webp',
                'icon' => 'assets/images/icon/corporate-governance.svg',
                'gradient' => '90deg, var(--wh462-accent), rgba(0, 0, 0, 0)',
                'align' => 'left',
            ],
            [
                'title' => 'Work and Holiday Visa 462',
                'text' => 'Designed for eligible passport holders from participating countries who want to holiday and work in Australia.',
                'image' => $wh462Img.'/visa-462.webp',
                'icon' => 'assets/images/icon/workplace-business.svg',
                'gradient' => '90deg, var(--wh462-accent), rgba(0, 0, 0, 0)',
                'align' => 'left',
                'featured' => true,
            ],
        ],
        'footer' => 'Not sure which short-stay pathway fits your passport and travel goals? We help compare options based on eligibility, purpose, and application readiness.',
        'cta' => 'Help Me Choose the Right Visa',
    ];
    $why = [
        'tagline' => 'Guidance you can trust',
        'heading' => 'Clear advice for young travellers planning Australia',
        'subheading' => 'We combine visa knowledge, document guidance, and practical support so you can apply with more confidence.',
        'panel_image' => $wh462Img.'/support.webp',
        'cards' => [
            ['title' => 'Eligibility-Focused Review', 'text' => 'We check whether the 462 pathway is suitable before you start.', 'icon' => 'fa-light fa-user-check'],
            ['title' => 'Document Clarity', 'text' => 'We help you prepare evidence properly and avoid missing documents.', 'icon' => 'fa-light fa-file-lines'],
            ['title' => 'Country-Specific Awareness', 'text' => 'We guide you based on passport, profile, and applicable requirements.', 'icon' => 'fa-light fa-earth-americas'],
            ['title' => 'Application Support', 'text' => 'We help organise your application details and supporting documents.', 'icon' => 'fa-light fa-folder-open'],
            ['title' => 'Personalised Guidance', 'text' => 'You get advice based on your situation, not generic assumptions.', 'icon' => 'fa-light fa-user-pen'],
            ['title' => 'Responsive Communication', 'text' => 'Our team helps you understand what to do next and when.', 'icon' => 'fa-light fa-comments'],
        ],
    ];
    $finalCta = [
        'tagline' => 'Ready to explore Australia?',
        'heading' => 'Start your Work and Holiday Visa 462 journey today',
        'subheading' => 'Submit your enquiry or book an appointment with Visawizer to check your eligibility and prepare your application with confidence.',
        'supporting' => 'Share your details today and let our team guide you on the next step.',
        'primary' => 'Book Appointment',
        'secondary' => 'Submit Enquiry',
    ];
    $testimonialSlides = [
        [
            'name' => 'Nishchay Sharma',
            'avatar' => 'initial',
            'initial' => 'E',
            'initial_bg' => 'var(--wh462-accent)',
            'testimonial' => 'Visawizer explained the process clearly and helped me understand which documents were important before applying.',
        ],
        [
            'name' => 'Arjun',
            'avatar' => 'initial',
            'initial' => 'A',
            'initial_bg' => 'var(--wh462-accent)',
            'testimonial' => 'I was confused between visitor visa and work and holiday visa. The team guided me patiently and helped me choose the right pathway.',
        ],
        [
            'name' => 'Gurpreet Baath',
            'avatar' => 'initial',
            'initial' => 'C',
            'initial_bg' => 'var(--wh462-accent)',
            'testimonial' => 'The consultation gave me clarity about my eligibility, timeline, and documents. It felt professional and personal.',
        ],
    ];
    $faqs = [
        ['q' => 'What is the Australia Work and Holiday Visa Subclass 462?', 'a' => 'The Subclass 462 visa is for eligible young travellers from participating countries who want an extended holiday in Australia and may work during their stay to help fund their trip.'],
        ['q' => 'Is 462 the same as 417?', 'a' => 'No. Both are working holiday-style visas, but they apply to different passport countries and may have different requirements.'],
        ['q' => 'Can I work in Australia on Visa 462?', 'a' => 'Yes, the visa allows eligible applicants to work during their stay, but conditions and limitations may apply. These should be checked before applying.'],
        ['q' => 'Do I need English proof for Visa 462?', 'a' => 'Some applicants may need to provide English evidence depending on passport country and current rules.'],
        ['q' => 'Do I need funds proof?', 'a' => 'Applicants are generally expected to show that they can support themselves at the beginning of their stay. The required evidence should be reviewed before application.'],
        ['q' => 'Can Visawizer help me check eligibility?', 'a' => 'Yes. Visawizer can review your passport country, age, education, English evidence, funds, previous visa history, and documents.'],
        ['q' => 'Can I apply if I had a previous visa refusal?', 'a' => 'A previous refusal does not automatically mean you cannot apply, but it must be reviewed carefully before lodging any new application.'],
        ['q' => 'How do I start?', 'a' => 'Fill out the enquiry form, request a call back, or book an appointment with Visawizer.'],
    ];

    if (!function_exists('wh462_form_markup')) {
        function wh462_form_markup(string $formId, array $countries, array $form, bool $compact = false, bool $showDisclaimer = true, bool $hideHeader = false, string $formClass = '', bool $showHeadSeparator = false, string $cardClass = ''): string
        {
            ob_start();
            $compactClass = $compact ? 'is-compact' : '';
            $messageRows = $compact ? 3 : 4;
            $formClassAttr = trim('wh462-enquiry-form ' . $formClass);
            $cardClassAttr = trim('wh462-form-card contact-form-3 ' . $compactClass . ' ' . $cardClass);
            ?>
            <div class="<?= e($cardClassAttr) ?>" id="<?= e($formId) ?>">
                <div class="form-content">
                    <?php if (!$hideHeader): ?>
                        <div class="wh462-form-head">
                            <div class="wh462-form-label">Reach us</div>
                            <h3><?= e($form['heading']) ?></h3>
                            <p class="wh462-form-subheading"><?= e($form['subheading']) ?></p>
                            <?php if ($showHeadSeparator): ?>
                                <div class="wh462-form-head-separator" aria-hidden="true"></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <form class="<?= e($formClassAttr) ?>" data-form-id="<?= e($formId) ?>" data-form-instance="<?= e($formClass) ?>" novalidate>
                        <?= csrf_field() ?>
                        <div class="wh462-form-alert d-none" role="alert" aria-live="polite"></div>
                        <div class="row wh462-form-grid">
                            <div class="col-md-6">
                                <label class="wh462-field-label">Full Name</label>
                                <input class="form-control" name="name" placeholder="Your full name" type="text" required>
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Mobile Number / WhatsApp Number</label>
                                <input class="form-control" name="phone" placeholder="Mobile or WhatsApp number" type="tel" required>
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Email Address</label>
                                <input class="form-control" name="email" placeholder="Email address" type="email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Current Country of Residence</label>
                                <select class="form-control" name="residence_country">
                                    <option value="">Select country</option>
                                    <?php foreach ($countries as $country): ?>
                                        <option value="<?= e($country) ?>"><?= e($country) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Passport Country</label>
                                <select class="form-control" name="passport_country">
                                    <option value="">Select passport country</option>
                                    <?php foreach ($countries as $country): ?>
                                        <option value="<?= e($country) ?>"><?= e($country) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Age</label>
                                <input class="form-control" name="age" placeholder="Your age" type="number" min="18" max="35">
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Highest Education Qualification</label>
                                <input class="form-control" name="education" placeholder="e.g. Bachelor degree" type="text">
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Do you have English language evidence?</label>
                                <select class="form-control" name="english_evidence">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Have you previously held an Australian Working Holiday or Work and Holiday visa?</label>
                                <select class="form-control" name="previous_wh_visa">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="wh462-field-label">Planned Travel Month</label>
                                <input class="form-control" name="travel_month" placeholder="e.g. March 2026" type="text">
                            </div>
                            <div class="col-12">
                                <label class="wh462-field-label">Message / Query</label>
                                <textarea class="form-control" name="message" placeholder="Share your query or situation" rows="<?= $messageRows ?>"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="wh462-field-label">Preferred Action</label>
                                <select class="form-control" name="preferred_action">
                                    <option value="">Select preferred action</option>
                                    <option value="Book Appointment">Book Appointment</option>
                                    <option value="Request Call Back">Request Call Back</option>
                                    <option value="Submit Enquiry">Submit Enquiry</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" name="bot_field" class="d-none" tabindex="-1" autocomplete="off">
                        <input type="hidden" name="course" value="Work and Holiday Visa Subclass 462">
                        <input type="hidden" name="formName" value="462 Landing - <?= e($formId) ?>">
                        <input type="hidden" name="city" value="">
                        <div class="m-t-25 wh462-form-submit-wrap">
                            <button class="e-primary-btn has-icon is-hover-white wh462-form-submit" type="submit">
                                <span class="btext"><?= e($form['button']) ?></span>
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                            </button>
                        </div>
                        <?php if ($showDisclaimer): ?>
                            <p class="wh462-form-disclaimer col-12"><?= e($form['disclaimer']) ?></p>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
            <?php
            return ob_get_clean();
        }
    }
    $wh462PageUrl = url('australia-work-and-holiday-visa-subclass-462');
    $wh462ScrollToHeroForm = "var t=document.getElementById('wh462-hero-form');if(t){t.scrollIntoView({behavior:'smooth'});return false;}";
    $wh462ScrollToFaqForm = "var t=document.getElementById('wh462-faq-form');if(t){t.scrollIntoView({behavior:'smooth'});return false;}";
@endphp

<style type="text/css">
    .wh462-page {
        /* Change brand tint for this page in one place: --wh462-accent */
        --wh462-accent: var(--theme-color-3);
        --wh462-surface: #ffffff;
        --wh462-ink: #0f172a;
        --wh462-dark: #07111f;
        --wh462-dark-2: #10243a;
        --wh462-light: color-mix(in srgb, var(--wh462-accent) 6%, var(--wh462-surface));
        --wh462-muted: #64748b;
        --wh462-band-bg-start: color-mix(in srgb, var(--wh462-accent) 14%, var(--wh462-surface));
        --wh462-band-bg-end: color-mix(in srgb, var(--wh462-accent) 24%, var(--wh462-surface));
        --wh462-band-border: color-mix(in srgb, var(--wh462-accent) 18%, var(--wh462-surface));
        --wh462-band-text: color-mix(in srgb, var(--wh462-accent) 82%, var(--wh462-ink));
        --wh462-band-shadow: color-mix(in srgb, var(--wh462-accent) 14%, transparent);
        --wh462-combo-section-bg: color-mix(in srgb, var(--wh462-accent) 5%, #f0f3f9);
        --wh462-combo-split-start: color-mix(in srgb, var(--wh462-accent) 92%, #000000);
        --wh462-combo-split-end: color-mix(in srgb, var(--wh462-accent) 76%, #000000);
        --wh462-accent-deep: color-mix(in srgb, var(--wh462-accent) 88%, #000000);
        --wh462-radius: 6px;
        overflow-x: clip;
    }
    /* Unified 6px corners — buttons, cards, inputs, panels */
    .wh462-page .e-primary-btn,
    .wh462-page .e-primary-btn:before,
    .wh462-page .e-primary-btn .icon-wrap,
    .wh462-page .wh462-btn-ghost,
    .wh462-page .wh462-form-card,
    .wh462-page .wh462-form-grid .form-control,
    .wh462-page .wh462-highlight-card,
    .wh462-page .study-topic-hero-band .band-card,
    .wh462-page .study-topic-hero-band .band-thumb img,
    .wh462-page .wh462-hero-form-combo .wh462-combo-overview-body,
    .wh462-page .wh462-hero-form-combo .wh462-combo-form-wrap .wh462-form-card,
    .wh462-page .wh462-overview-tag,
    .wh462-page .wh462-hero-form-combo .wh462-overview-visual-grid .study-path-icon,
    .wh462-page .wh462-info-card,
    .wh462-page .service-card-3,
    .wh462-page .service-card,
    .wh462-page .service-card .service-top i,
    .wh462-page .service-card-3 .service-top i,
    .wh462-page .wh462-why-panel,
    .wh462-page .project-card,
    .wh462-page .camping-card,
    .wh462-page .study-s5-visa .study-path-card,
    .wh462-page .testi-google-card,
    .wh462-page .faq-accordion .accordion-item,
    .wh462-page .blog-card,
    .wh462-page .become-volunteer-card,
    .wh462-sticky-cta .wh462-sticky-btn {
        border-radius: var(--wh462-radius) !important;
    }
    .wh462-page .faq-accordion .accordion-item {
        overflow: hidden;
    }
    .wh462-page .faq-accordion .accordion-item .accordion-header .accordion-button,
    .wh462-page .faq-accordion .accordion-item .accordion-collapse {
        border-radius: 0 !important;
    }
    .wh462-process-section .project-card .thumb .number span {
        border-radius: var(--wh462-radius) !important;
    }
    .wh462-page .wh462-section-pad {
        padding: clamp(72px, 8vw, 110px) 0;
    }
    .wh462-page .wh462-band-light {
        background: linear-gradient(180deg, #ffffff 0%, var(--wh462-light) 100%);
    }
    .wh462-page .wh462-band-dark {
        background:
            radial-gradient(circle at 14% 18%, color-mix(in srgb, var(--wh462-accent) 20%, transparent), transparent 30%),
            radial-gradient(circle at 82% 80%, rgba(59, 130, 246, 0.16), transparent 28%),
            linear-gradient(155deg, var(--wh462-dark) 0%, var(--wh462-dark-2) 52%, #111827 100%);
        color: #f8fafc;
    }
    .wh462-page .wh462-band-dark h2,
    .wh462-page .wh462-band-dark h3,
    .wh462-page .wh462-band-dark h4,
    .wh462-page .wh462-band-dark .common-title h2 {
        color: #ffffff !important;
    }
    .wh462-page .wh462-band-dark p,
    .wh462-page .wh462-band-dark .study-copy-sub,
    .wh462-page .wh462-band-dark .study-copy-body {
        color: rgba(248, 250, 252, 0.88);
    }

    /* Section 1: Education-style hero banner */
    .wh462-page .study-topic-hero {
        background-size: cover;
        background-position: center;
        position: relative;
        padding: 140px 0 150px;
        overflow: hidden;
    }
    .wh462-page .study-topic-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, color-mix(in srgb, var(--wh462-accent) 24%, transparent) 0%, color-mix(in srgb, var(--wh462-accent) 68%, #020617) 100%);
    }
    .wh462-page .study-topic-hero .hero-content-5 {
        position: relative;
        z-index: 1;
        max-width: 980px;
        margin: 0 auto;
        text-align: center;
    }
    .wh462-page .study-topic-hero .topic-tag {
        display: inline-block;
        font-size: 0.82rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.88);
        margin-bottom: 14px;
        padding-left: 12px;
        border-left: 3px solid var(--wh462-accent);
    }
    .wh462-page .study-topic-hero .title h1 {
        font-size: clamp(2.45rem, 5vw, 4.7rem);
        line-height: 1.05;
        margin-bottom: 14px;
        color: #fff;
    }
    .wh462-page .study-topic-hero .hero-sub {
        max-width: 760px;
        margin: 0 auto 26px;
        color: rgba(255, 255, 255, 0.94);
        font-size: 1.08rem;
        line-height: 1.68;
        font-weight: 500;
    }
    .wh462-page .study-topic-hero .hero-content-1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }
    .wh462-page .study-topic-hero .e-primary-btn {
        border-radius: 6px !important;
    }
    .wh462-page .study-topic-hero .e-primary-btn:before,
    .wh462-page .study-topic-hero .e-primary-btn .icon-wrap {
        border-radius: 6px !important;
    }
    .wh462-page .study-topic-hero .wh462-btn-ghost {
        display: inline-flex;
        align-items: center;
        padding: 12px 22px;
        border: 2px solid rgba(255, 255, 255, 0.75);
        border-radius: 6px;
        color: #fff;
        font-weight: 600;
        transition: background 0.2s, color 0.2s;
    }
    .wh462-page .study-topic-hero .wh462-btn-ghost:hover {
        background: #fff;
        color: #0f172a;
    }
    .wh462-page .study-topic-hero .wh462-micro-cta {
        margin-top: 18px;
        font-size: 0.92rem;
        color: rgba(255, 255, 255, 0.82);
    }
    .wh462-page .study-topic-hero .wh462-micro-cta a {
        color: #fff;
        text-decoration: underline;
        font-weight: 600;
    }

    /* Section 2: Intro band attached to hero */
    .wh462-page .study-topic-hero-band {
        margin-top: -80px;
        position: relative;
        z-index: 3;
        padding-bottom: 24px;
    }
    .wh462-page .study-topic-hero-band .band-card {
        background: linear-gradient(135deg, var(--wh462-band-bg-start) 0%, var(--wh462-band-bg-end) 100%);
        border: 1px solid var(--wh462-band-border);
        border-radius: 6px;
        padding: 28px 32px;
        box-shadow: 0 18px 44px var(--wh462-band-shadow);
    }
    .wh462-page .study-topic-hero-band .band-stack {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .wh462-page .study-topic-hero-band .band-copy {
        flex: 1 1 auto;
        min-width: 0;
    }
    .wh462-page .study-topic-hero-band .band-thumb {
        flex: 0 0 auto;
        width: min(240px, 30%);
        max-width: 240px;
    }
    .wh462-page .study-topic-hero-band .band-thumb img {
        width: 100%;
        height: auto;
        min-height: 0;
        max-height: 200px;
        object-fit: cover;
        object-position: center;
        border-radius: 6px;
        box-shadow: 0 18px 40px var(--wh462-band-shadow);
        display: block;
    }
    .wh462-page .study-topic-hero-band .band-copy p {
        color: var(--wh462-band-text);
        font-size: 1rem;
        line-height: 1.72;
        margin-bottom: 16px;
    }
    .wh462-page .study-topic-hero-band .band-copy p:last-child {
        margin-bottom: 0;
    }

    /* Section 3: Mirashka-style overview + form */
    .wh462-hero-form-combo {
        position: relative;
        background: var(--wh462-combo-section-bg);
        padding: 0 0 80px;
        overflow: visible;
    }
    .wh462-hero-form-combo .wh462-combo-split-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: clamp(240px, 36vw, 340px);
        background:
            radial-gradient(circle at 14% 18%, color-mix(in srgb, var(--wh462-accent) 20%, transparent), transparent 30%),
            linear-gradient(155deg, var(--wh462-combo-split-start) 0%, var(--wh462-accent) 48%, var(--wh462-combo-split-end) 100%);
        z-index: 0;
    }
    .wh462-hero-form-combo > .container {
        position: relative;
        z-index: 1;
        padding-top: clamp(36px, 5vw, 56px);
    }
    .wh462-hero-form-combo .wh462-combo-row {
        align-items: stretch;
    }
    .wh462-hero-form-combo .wh462-combo-row > [class*="col-"] {
        display: flex;
        flex-direction: column;
    }
    .wh462-hero-form-combo .wh462-combo-left {
        display: flex;
        flex-direction: column;
        gap: 0;
        flex: 1;
        min-height: 100%;
        height: 100%;
    }
    .wh462-hero-form-combo .wh462-combo-intro-head {
        padding: 0 0 clamp(24px, 3vw, 36px);
        max-width: 560px;
    }
    .wh462-hero-form-combo .wh462-combo-eyebrow {
        display: inline-block;
        font-size: 0.78rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.92);
        margin-bottom: 14px;
        padding-bottom: 6px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.55);
    }
    .wh462-hero-form-combo .wh462-combo-intro-head h2 {
        font-size: clamp(1.5rem, 2.8vw, 2.15rem);
        line-height: 1.22;
        color: #fff;
        margin-bottom: 12px;
    }
    .wh462-hero-form-combo .wh462-combo-intro-head .overview-sub {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.7;
        margin-bottom: 0;
    }
    .wh462-hero-form-combo .wh462-combo-overview-body {
        flex: 1;
        background: #fff;
        border-radius: 6px;
        padding: clamp(24px, 3vw, 32px);
        border: 1px solid rgba(15, 23, 42, 0.08);
        box-shadow: 0 22px 55px rgba(15, 23, 42, 0.1);
    }
    .wh462-hero-form-combo .wh462-combo-overview-body .overview-body {
        color: #475569;
        font-size: 0.96rem;
        line-height: 1.72;
        margin-bottom: 0;
    }
    .wh462-hero-form-combo .wh462-overview-visual-grid {
        margin-top: 22px;
    }
    .wh462-hero-form-combo .wh462-overview-visual-grid > [class*="col-"] {
        display: flex;
    }
    .wh462-hero-form-combo .wh462-overview-visual-grid .study-path-visual-card {
        width: 100%;
        min-height: 250px;
    }
    .wh462-hero-form-combo .wh462-overview-visual-grid .study-path-visual-inner {
        padding: 20px 16px 18px;
    }
    .wh462-hero-form-combo .wh462-overview-visual-grid .study-path-icon {
        width: 48px;
        height: 48px;
        margin-bottom: 12px;
        font-size: 1.35rem;
        border-radius: 6px;
    }
    .wh462-hero-form-combo .wh462-overview-visual-grid .study-path-visual-card h3 {
        font-size: clamp(1.05rem, 1.8vw, 1.35rem);
        margin-bottom: 10px;
    }
    .wh462-hero-form-combo .wh462-overview-visual-grid .study-path-visual-card p {
        font-size: 0.88rem;
        line-height: 1.55;
    }
    .wh462-hero-form-combo .wh462-combo-form-wrap {
        position: relative;
        z-index: 2;
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        width: 100%;
        height: 100%;
    }
    .wh462-hero-form-combo .wh462-combo-form-wrap .wh462-form-card {
        width: 100%;
        background: #fff;
        border-radius: 6px;
        box-shadow: 0 28px 70px rgba(15, 23, 42, 0.14);
        border: 1px solid rgba(15, 23, 42, 0.08);
        padding: clamp(28px, 3vw, 40px) clamp(24px, 3vw, 36px);
    }
    .wh462-hero-form-combo .wh462-form-card .wh462-form-label {
        color: var(--wh462-accent);
        margin-bottom: 4px;
        padding-bottom: 4px;
        margin-left: 0;
        margin-right: 0;
        text-align: left;
        border-bottom-color: color-mix(in srgb, var(--wh462-accent) 35%, transparent);
    }
    .wh462-hero-form-combo .wh462-form-head {
        text-align: left;
    }
    .wh462-hero-form-combo .wh462-form-card.contact-form-3 h3 {
        color: #0f172a;
        text-align: left;
        margin-bottom: 6px;
        line-height: 1.2;
    }
    .wh462-hero-form-combo .wh462-form-card > .form-content > .wh462-form-head > p.wh462-form-subheading,
    .wh462-hero-form-combo .wh462-form-card > .form-content > p.wh462-form-subheading {
        text-align: left;
        color: #64748b;
        margin-bottom: 16px;
        line-height: 1.45;
        opacity: 1 !important;
    }
    @media (min-width: 992px) {
        .wh462-hero-form-combo .wh462-combo-overview-body {
            margin-top: auto;
        }
        .wh462-hero-form-combo .wh462-combo-form-wrap {
            margin-top: 0;
            justify-content: flex-end;
            padding-bottom: 0;
        }
    }
    .wh462-overview-section {
        padding: 0;
        background: transparent;
    }
    .wh462-overview-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 6px;
        background: color-mix(in srgb, var(--wh462-accent) 10%, transparent);
        color: var(--wh462-accent);
        font-size: 0.78rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 16px;
    }
    .wh462-overview-section h2 {
        font-size: clamp(1.55rem, 2.5vw, 2.15rem);
        line-height: 1.2;
        color: #0f172a;
        margin-bottom: 10px;
    }
    .wh462-overview-section .overview-sub {
        color: #475569;
        font-size: 1.05rem;
        font-weight: 500;
        line-height: 1.6;
        margin-bottom: 14px;
    }
    .wh462-overview-section .overview-body {
        color: #64748b;
        font-size: 0.96rem;
        line-height: 1.72;
        margin-bottom: 16px;
    }
    .wh462-highlight-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
        margin-top: 24px;
    }
    .wh462-hero-form-combo .wh462-highlight-card {
        background: #f8fafc;
    }
    .wh462-highlight-card {
        background: #fff;
        border: 1px solid rgba(15, 23, 42, 0.08);
        border-radius: 6px;
        padding: 18px;
        box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
    }
    .wh462-highlight-card h4 {
        font-size: 0.95rem;
        color: var(--wh462-accent);
        margin-bottom: 8px;
        font-weight: 700;
    }
    .wh462-highlight-card p {
        font-size: 0.9rem;
        line-height: 1.6;
        color: #475569;
        margin: 0;
    }

    .wh462-form-card {
        background: #fff;
        border-radius: 6px;
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.1);
        border: 1px solid rgba(15, 23, 42, 0.06);
        padding: clamp(22px, 3vw, 32px);
    }
    .wh462-form-card .wh462-form-label {
        display: block;
        text-align: center;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--wh462-accent);
        margin-bottom: 4px;
        padding-bottom: 4px;
        border-bottom: 2px solid color-mix(in srgb, var(--wh462-accent) 30%, transparent);
        width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }
    .wh462-form-card.contact-form-3 h3 {
        text-align: center;
        font-size: clamp(1.35rem, 2.2vw, 1.75rem);
        line-height: 1.2;
        color: #0f172a;
        margin-top: 0;
        margin-bottom: 6px;
    }
    .wh462-form-card > .form-content > p.wh462-form-subheading,
    .wh462-form-card > .form-content > .wh462-form-head > p.wh462-form-subheading,
    .wh462-form-card.contact-form-3 .wh462-form-subheading {
        text-align: center;
        color: #64748b;
        font-size: 0.94rem;
        line-height: 1.45;
        margin-top: 0;
        margin-bottom: 16px;
        opacity: 1;
        display: block;
        visibility: visible;
    }
    .wh462-form-card.contact-form-3 p.wh462-form-subheading {
        width: 100%;
        max-width: 100%;
    }
    .wh462-field-label {
        display: block;
        font-size: 0.82rem;
        font-weight: 600;
        color: #334155;
        margin-bottom: 6px;
    }
    .wh462-form-grid .form-control {
        border-radius: 6px;
        border: 1px solid #d1d5db;
        padding: 10px 14px;
        font-size: 0.92rem;
        margin-bottom: 4px;
    }
    .wh462-form-grid .form-control:focus {
        border-color: var(--wh462-accent);
        box-shadow: 0 0 0 3px color-mix(in srgb, var(--wh462-accent) 15%, transparent);
    }
    .wh462-form-card.contact-form-3 p.wh462-form-disclaimer {
        width: 100%;
        max-width: 100%;
        display: block;
        clear: both;
        font-size: 0.78rem;
        line-height: 1.55;
        color: #94a3b8;
        opacity: 1;
        margin-top: 14px;
        margin-bottom: 0;
        padding: 0;
        text-align: left;
    }
    .wh462-form-card.is-compact {
        padding: 22px;
    }
    .wh462-form-card.is-compact .wh462-form-grid .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .wh462-pre-faq-form-section {
        background: var(--wh462-combo-section-bg);
    }
    .wh462-pre-faq-form-section .wh462-form-card--prefaq {
        max-width: 980px;
        margin: 0 auto;
        padding: clamp(32px, 4vw, 48px);
        box-shadow: 0 24px 64px rgba(15, 23, 42, 0.11);
    }
    .wh462-pre-faq-form-section .wh462-form-card--prefaq .wh462-form-head {
        text-align: center;
        margin-bottom: 4px;
    }
    .wh462-pre-faq-form-section .wh462-form-card--prefaq .wh462-form-label {
        margin-left: auto;
        margin-right: auto;
    }
    .wh462-pre-faq-form-section .wh462-form-card--prefaq h3 {
        text-align: center;
    }
    .wh462-pre-faq-form-section .wh462-form-card--prefaq .wh462-form-subheading {
        text-align: center;
        max-width: 560px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 0;
        color: #000 !important;
        opacity: 1 !important;
    }
    .wh462-pre-faq-form-section .wh462-form-head-separator {
        width: 100%;
        height: 1px;
        margin: clamp(18px, 2.5vw, 24px) 0 clamp(22px, 3vw, 28px);
        background: linear-gradient(
            90deg,
            transparent 0%,
            rgba(15, 23, 42, 0.14) 18%,
            rgba(15, 23, 42, 0.14) 82%,
            transparent 100%
        );
    }
    .wh462-pre-faq-form-section .wh462-form-grid {
        row-gap: 6px;
    }
    .wh462-pre-faq-form-section .wh462-form-grid .form-control {
        background: #f8fafc;
        border-color: #dbe3ea;
    }
    .wh462-pre-faq-form-section .wh462-form-grid .form-control:focus {
        background: #fff;
    }
    .wh462-pre-faq-form-section .wh462-form-submit-wrap {
        margin-top: 28px;
    }
    .wh462-pre-faq-form-section .wh462-form-submit-wrap .wh462-form-submit {
        width: 100%;
        justify-content: center;
    }
    .wh462-pre-faq-form-section .wh462-form-card--prefaq p.wh462-form-disclaimer {
        text-align: center;
    }
    .wh462-form-alert {
        margin-bottom: 16px;
        padding: 12px 14px;
        border-radius: 6px;
        font-size: 0.9rem;
        line-height: 1.5;
        background: #fef2f2;
        border: 1px solid #fecaca;
        color: #b91c1c;
    }

    /* Section 4: Who should apply */
    .wh462-who-section {
        background: #fff;
    }
    .wh462-who-section .wh462-who-intro {
        padding: clamp(32px, 4vw, 48px) 0 clamp(16px, 2vw, 24px);
    }
    .wh462-who-section .wh462-who-intro .common-subtitle {
        margin-bottom: 8px;
    }
    .wh462-who-section .wh462-who-intro .common-title {
        margin-bottom: 12px !important;
    }
    .wh462-who-section .wh462-who-intro .w-line {
        margin-bottom: 10px;
        border-color: var(--theme-color-3);
    }
    .wh462-who-section .wh462-who-intro .wh462-who-intro-lead,
    .wh462-who-section .wh462-who-intro .wh462-who-intro-sub {
        max-width: 980px;
        margin-left: auto;
        margin-right: auto;
        color: var(--body-color, #4b5563);
    }
    .wh462-who-section .wh462-who-intro .wh462-who-intro-lead {
        font-size: 18px;
        font-weight: 500;
        line-height: 1.5;
        margin-top: 8px;
        margin-bottom: 0;
    }
    .wh462-who-section .wh462-who-intro .wh462-who-intro-sub {
        font-size: 16px;
        font-weight: 400;
        line-height: 1.75;
        margin-bottom: 0;
    }
    .wh462-who-points {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px 20px;
        margin-top: 12px;
        margin-bottom: 0;
    }
    .wh462-who-points .service {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .wh462-who-points .service i {
        flex-shrink: 0;
        margin-top: 4px;
        color: var(--theme-color-3);
    }
    .wh462-who-points .service p {
        margin-bottom: 0;
        font-size: 15px;
        line-height: 1.5;
    }
    @media (max-width: 767px) {
        .wh462-who-points {
            grid-template-columns: 1fr;
        }
    }
    .wh462-who-body {
        padding: 0 0 clamp(36px, 5vw, 56px);
    }
    .wh462-who-body .container {
        padding-top: 0;
        padding-bottom: 0;
    }
    .wh462-who-body .wh462-who-content > p:first-child {
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 1.75;
        color: #475569;
    }
    .wh462-who-body .wh462-who-points-heading {
        margin-bottom: 0;
    }
    .wh462-who-body .wh462-who-image {
        border-radius: var(--wh462-radius);
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.12);
        height: 100%;
    }
    .wh462-who-body .wh462-who-content {
        padding: 0 0 0 clamp(0px, 2vw, 24px);
    }
    .wh462-who-body .wh462-who-image img {
        width: 100%;
        height: 100%;
        min-height: 320px;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    @media (max-width: 767px) {
        .wh462-who-body .wh462-who-image {
            margin-bottom: 28px;
        }
    }

    /* Section 5: Eligibility — theme-color band */
    .wh462-eligibility-section {
        background:
            linear-gradient(
                150deg,
                color-mix(in srgb, var(--wh462-accent) 92%, #000) 0%,
                var(--wh462-accent) 48%,
                color-mix(in srgb, var(--wh462-accent-deep) 95%, #000) 100%
            ),
            url('{{ asset('img/bg.png') }}');
        background-position: center bottom;
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: clamp(44px, 5vw, 64px) !important;
        padding-bottom: clamp(44px, 5vw, 64px) !important;
    }
    .wh462-eligibility-section .text-center.m-b-50 {
        margin-bottom: clamp(28px, 4vw, 40px) !important;
    }
    .wh462-eligibility-section .service-card-3 {
        height: 100%;
    }
    .wh462-eligibility-section .wh462-eligibility-grid {
        justify-content: center;
    }
    .wh462-eligibility-section .text-center.m-t-40 {
        margin-top: clamp(24px, 3vw, 32px) !important;
    }
    .wh462-eligibility-section .e-primary-btn {
        color: var(--wh462-accent);
        background: #fff;
        border: 2px solid #fff;
    }
    .wh462-eligibility-section .e-primary-btn:before {
        left: -10%;
        transform: translateX(0%) translateY(-50%);
        background: #fff;
    }
    .wh462-eligibility-section .e-primary-btn .icon-wrap {
        background: linear-gradient(150deg, var(--wh462-accent) 15%, var(--wh462-accent) 48.85%, var(--wh462-accent) 100%);
        color: #fff;
    }
    .wh462-eligibility-section .e-primary-btn:hover,
    .wh462-eligibility-section .e-primary-btn:focus-visible {
        color: var(--wh462-accent);
        background: #fff;
        border-color: #fff;
    }
    .wh462-eligibility-section .e-primary-btn:hover:before,
    .wh462-eligibility-section .e-primary-btn:focus-visible:before {
        left: -10%;
        background: #fff;
    }
    .wh462-eligibility-section .e-primary-btn:hover .icon-wrap,
    .wh462-eligibility-section .e-primary-btn:focus-visible .icon-wrap {
        background: linear-gradient(150deg, var(--wh462-accent) 15%, var(--wh462-accent) 48.85%, var(--wh462-accent) 100%);
        color: #fff;
    }
    .wh462-eligibility-section .e-primary-btn:hover .icon-wrap .icon i,
    .wh462-eligibility-section .e-primary-btn:focus-visible .icon-wrap .icon i {
        transform: none;
    }

    /* Section 6: Guidance — study page s5 two-card layout */
    .wh462-guidance-section.study-s5-visa {
        padding: clamp(48px, 6vw, 80px) 0;
    }
    .wh462-guidance-section .study-s5-intro-card::before {
        background: linear-gradient(180deg, var(--wh462-accent), color-mix(in srgb, var(--wh462-accent) 52%, #da5766));
    }
    .wh462-guidance-section .visa-lead.visa-highlight {
        background: linear-gradient(135deg, color-mix(in srgb, var(--wh462-accent) 7%, transparent), color-mix(in srgb, var(--wh462-accent) 4%, transparent));
        border-left-color: var(--wh462-accent);
    }
    .wh462-guidance-section .study-s5-support-head {
        background: var(--wh462-accent);
    }
    .wh462-guidance-section .study-support-list .li-mark {
        background: color-mix(in srgb, var(--wh462-accent) 14%, transparent);
        color: var(--wh462-accent);
    }
    .wh462-guidance-section .study-support-list li:hover {
        background: linear-gradient(90deg, color-mix(in srgb, var(--wh462-accent) 6%, transparent), transparent);
    }

    /* Section 7: Documents — homepage camping slider */
    .wh462-documents-section.our-camping-section {
        padding: clamp(32px, 4vw, 48px) 0;
    }
    .wh462-documents-section .row.m-b-50 {
        margin-bottom: clamp(24px, 3vw, 32px) !important;
    }
    .wh462-documents-section .common-subtitle {
        margin-bottom: 12px;
    }
    .wh462-documents-section .common-title {
        margin-bottom: 16px !important;
    }
    .wh462-documents-section .wh462-documents-lead {
        max-width: min(1060px, 96vw);
        margin-left: auto;
        margin-right: auto;
    }
    .wh462-documents-section .wh462-documents-lead:first-of-type {
        margin-top: 14px !important;
        margin-bottom: 8px !important;
    }
    .wh462-documents-section .text-center.m-t-40 {
        margin-top: clamp(24px, 3vw, 32px) !important;
    }

    /* Issue / mistake cards */
    .wh462-card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 18px;
    }
    .wh462-info-card {
        background: rgba(15, 23, 42, 0.55);
        border: 1px solid rgba(148, 163, 184, 0.18);
        border-radius: 6px;
        padding: 22px;
        height: 100%;
    }
    .wh462-band-light .wh462-info-card {
        background: #fff;
        border-color: rgba(15, 23, 42, 0.08);
        box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
    }
    .wh462-info-card .card-no {
        font-size: 0.78rem;
        font-weight: 700;
        color: var(--wh462-accent);
        margin-bottom: 10px;
    }
    .wh462-info-card h3 {
        font-size: 1.05rem;
        margin-bottom: 8px;
    }
    .wh462-band-light .wh462-info-card h3 {
        color: #0f172a;
    }
    .wh462-info-card p {
        font-size: 0.92rem;
        line-height: 1.65;
        margin: 0;
    }

    /* Section 8: Process — homepage completed-project layout */
    .wh462-process-section .completed-project-top {
        background-image:
            linear-gradient(45deg, color-mix(in srgb, var(--wh462-accent) 47%, transparent), color-mix(in srgb, var(--wh462-accent) 32%, transparent)),
            url('{{ asset('assets/imgs/visitor/work-holiday-462/hero-bg.webp') }}');
        padding-top: clamp(72px, 8vw, 110px);
        padding-bottom: clamp(280px, 28vw, 360px);
    }
    @media (max-width: 767px) {
        .wh462-process-section .completed-project-top {
            padding-bottom: 300px;
        }
        .wh462-process-section .completed-project-bottom {
            margin-top: -260px;
        }
    }
    .wh462-process-section .project-card .thumb .number span {
        display: inline-block;
        padding: 8px 18px;
        background: rgba(255, 255, 255, 0.01);
        border: 1.5px solid rgba(255, 255, 255, 0.3);
        box-shadow: inset 0px 4px 11px rgba(255, 255, 255, 0.4), inset -1px -4px 23.1px rgba(0, 24, 25, 0.28);
        backdrop-filter: blur(23.9px);
        border-radius: 6px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
    }

    /* Section 9: Comparison — homepage skilled/sponsored service cards */
    .wh462-compare-section {
        padding-bottom: clamp(32px, 4vw, 48px) !important;
    }
    .wh462-compare-section .text-center.m-t-40 {
        margin-top: clamp(24px, 3vw, 32px) !important;
    }
    .wh462-compare-section .wh462-compare-grid > [class*="col-"] {
        display: flex;
    }
    .wh462-compare-section .service-card {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        padding: 22px 22px 16px !important;
    }
    .wh462-compare-section .service-card .service-top {
        flex-shrink: 0;
        margin-bottom: 10px;
    }
    .wh462-compare-section .service-card .service-content {
        flex: 0 0 auto;
    }
    .wh462-compare-section .service-card .service-content p {
        width: 100%;
        margin-bottom: 0;
        padding-bottom: 0 !important;
    }
    .wh462-compare-section .service-card .service-top i {
        background: #fff !important;
        background-color: #fff !important;
        border: 2px solid var(--wh462-accent) !important;
        box-shadow: 0 15px 32px -9px rgba(0, 24, 25, 0.2);
    }
    .wh462-compare-section .service-card:hover .service-top i {
        background: #fff !important;
        background-color: #fff !important;
        border: 2px solid var(--wh462-accent) !important;
        color: inherit !important;
    }
    .wh462-compare-section .service-card .service-top i img {
        width: 46px;
        height: 46px;
        max-width: none;
        object-fit: contain;
        display: block;
    }
    @media (max-width: 991px) {
        .wh462-compare-section .service-card .service-top i img {
            width: 38px;
            height: 38px;
        }
    }
    .wh462-compare-section .service-card .service-top h4 {
        font-size: clamp(1.15rem, 1.6vw, 1.55rem);
        line-height: 1.3;
        max-width: none;
    }
    .wh462-compare-section .service-card .service-top h4.text-end {
        flex: 1;
        padding-right: 12px;
    }

    /* Section 10: Why choose — homepage trust layout */
    .wh462-why-section {
        padding-top: clamp(32px, 4vw, 48px) !important;
        padding-bottom: clamp(32px, 4vw, 48px) !important;
    }
    .wh462-why-section .wh462-why-row {
        align-items: stretch !important;
    }
    .wh462-why-section .wh462-why-row > [class*="col-"] {
        display: flex;
        flex-direction: column;
    }
    .wh462-why-section .wh462-why-panel {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
        width: 100%;
        min-height: 100%;
        height: 100%;
        padding: clamp(24px, 3vw, 32px) 16px !important;
    }
    .wh462-why-section .wh462-why-panel__inner {
        width: 100%;
        max-width: 520px;
        margin: 0 auto;
        text-align: center;
    }
    .wh462-why-section .wh462-why-panel__inner .common-subtitle {
        justify-content: center;
        width: 100%;
        margin-bottom: 12px;
    }
    .wh462-why-section .wh462-why-panel__inner .common-title {
        margin-bottom: 14px;
    }
    .wh462-why-section .wh462-why-panel__inner .common-title h2 {
        font-size: clamp(1.65rem, 2.6vw, 2.5rem);
        line-height: 1.2;
        text-align: center;
    }
    .wh462-why-section .wh462-why-panel__inner .w-line {
        margin-bottom: 12px;
    }
    .wh462-why-section .wh462-why-panel__inner p {
        margin: 0;
        text-align: center;
        font-size: clamp(1rem, 1.35vw, 1.2rem) !important;
        line-height: 1.5 !important;
    }
    .wh462-why-section .service-card-3 .service-top i {
        background: var(--wh462-accent) !important;
        border-color: var(--wh462-accent) !important;
        color: #fff !important;
        font-size: 34px;
    }
    .wh462-why-section .service-card-3:hover .service-top i {
        background: var(--wh462-accent) !important;
        border-color: var(--wh462-accent) !important;
        color: #fff !important;
    }
    @media (max-width: 991px) {
        .wh462-why-section .service-card-3 .service-top i {
            font-size: 28px;
        }
    }
    .wh462-why-section .service-card-3 {
        height: 100%;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }
    .wh462-why-section .service-card-3 .service-top {
        display: flex;
        flex-direction: column-reverse;
        gap: 8px;
        margin-bottom: 5px;
        padding: 10px 4px 0;
    }
    .wh462-why-section .service-card-3 .service-content {
        flex: 0 0 auto;
        padding: 0 4px 6px;
    }
    .wh462-why-section .service-card-3 .service-content p {
        width: 100%;
        padding: 0 6px 0;
        margin-bottom: 0;
    }
    .wh462-why-section .wh462-why-cards {
        row-gap: 8px;
        --bs-gutter-y: 8px;
        flex: 1;
    }
    .wh462-why-section .wh462-why-cards > [class*="col-"] {
        display: flex;
    }
    .wh462-why-section .service-card-3 .service-top h4 {
        font-size: clamp(1rem, 1.35vw, 1.35rem);
        line-height: 1.35;
        position: relative;
        z-index: 2;
    }
    .wh462-why-section .service-card-3 .service-top,
    .wh462-why-section .service-card-3 .service-content {
        position: relative;
        z-index: 2;
    }
    .wh462-why-section .service-card-3 .i-shape {
        top: 4px;
        right: 6px;
        left: auto;
        z-index: 1;
        pointer-events: none;
    }
    .wh462-why-section .service-card-3 .i-shape .i-shape-num {
        font-size: clamp(44px, 5vw, 64px);
        line-height: 1;
        opacity: 0.1;
        color: var(--wh462-accent);
    }

    /* CTA strip */
    .wh462-cta-strip {
        background: color-mix(in srgb, var(--wh462-accent) 8%, #fff);
        border-top: 1px solid color-mix(in srgb, var(--wh462-accent) 15%, transparent);
        border-bottom: 1px solid color-mix(in srgb, var(--wh462-accent) 15%, transparent);
        padding: 14px 0;
    }
    .wh462-cta-strip .strip-inner {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }
    .wh462-cta-strip p {
        margin: 0;
        font-weight: 600;
        color: #0f172a;
        font-size: 1.05rem;
    }

    /* Testimonials — wider intro on WH462 page */
    .wh462-page .testi-google-section .testi-google-head {
        max-width: min(980px, 96vw);
    }
    .wh462-page .testi-google-section .testi-google-intro {
        max-width: min(920px, 94vw);
        font-size: clamp(1rem, 1.35vw, 1.12rem);
    }


    /* Sticky mobile CTA — Book Appointment | Submit Enquiry | Call Now */
    .wh462-sticky-cta {
        --wh462-accent: var(--theme-color-3);
        --wh462-radius: 6px;
        display: none;
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 999;
        background: #fff;
        border-top: 1px solid rgba(15, 23, 42, 0.1);
        box-shadow: 0 -12px 36px rgba(15, 23, 42, 0.16);
        padding: 10px 12px calc(10px + env(safe-area-inset-bottom, 0px));
    }
    .wh462-sticky-cta .sticky-inner {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
        max-width: 640px;
        margin: 0 auto;
    }
    .wh462-sticky-cta .wh462-sticky-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
        min-height: 52px;
        padding: 8px 6px;
        border-radius: var(--wh462-radius) !important;
        font-size: 0.68rem;
        font-weight: 700;
        text-align: center;
        line-height: 1.2;
        text-decoration: none !important;
        letter-spacing: 0.01em;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }
    .wh462-sticky-cta .wh462-sticky-btn i {
        font-size: 0.95rem;
        line-height: 1;
    }
    .wh462-sticky-cta .wh462-sticky-btn:active {
        transform: scale(0.97);
    }
    .wh462-sticky-cta .wh462-sticky-btn--book {
        background: var(--wh462-accent) !important;
        color: #fff !important;
        box-shadow: 0 4px 14px color-mix(in srgb, var(--wh462-accent) 35%, transparent);
    }
    .wh462-sticky-cta .wh462-sticky-btn--enquiry {
        background: #eef2f7 !important;
        color: #0f172a !important;
        border: 1px solid rgba(15, 23, 42, 0.1);
    }
    .wh462-sticky-cta .wh462-sticky-btn--call {
        background: #15803d !important;
        color: #fff !important;
        box-shadow: 0 4px 14px rgba(21, 128, 61, 0.28);
    }

    @media (max-width: 1199px) {
        .wh462-page .study-topic-hero {
            padding: 110px 0 120px;
        }
        .wh462-page .study-topic-hero-band {
            margin-top: -60px;
        }
        .wh462-page .study-topic-hero-band .band-stack {
            flex-direction: column;
            align-items: stretch;
        }
        .wh462-page .study-topic-hero-band .band-thumb {
            width: 100%;
            max-width: 280px;
        }
        .wh462-page .study-topic-hero-band .band-thumb img {
            max-height: 200px;
        }
        .wh462-hero-form-combo {
            padding-bottom: 60px;
        }
        .wh462-hero-form-combo .wh462-combo-split-bg {
            height: auto;
            min-height: 220px;
            bottom: auto;
        }
        .wh462-hero-form-combo > .container {
            padding-top: 32px;
        }
        .wh462-hero-form-combo .wh462-combo-form-wrap {
            margin-top: 24px;
            padding-bottom: 0;
        }
        .wh462-hero-form-combo .wh462-combo-overview-body {
            min-height: 0;
            margin-top: 20px;
        }
        .wh462-hero-form-combo .wh462-combo-form-wrap {
            justify-content: flex-start;
        }
        .wh462-hero-form-combo .wh462-combo-intro-head {
            background:
                radial-gradient(circle at 14% 18%, color-mix(in srgb, var(--wh462-accent) 20%, transparent), transparent 30%),
                linear-gradient(155deg, var(--wh462-combo-split-start) 0%, var(--wh462-accent) 48%, var(--wh462-combo-split-end) 100%);
            border-radius: 6px;
            padding: 24px 22px;
            max-width: none;
        }
    }
    @media (max-width: 767px) {
        .wh462-highlight-grid {
            grid-template-columns: 1fr;
        }
        .wh462-sticky-cta {
            display: block;
        }
        .wh462-page {
            padding-bottom: calc(84px + env(safe-area-inset-bottom, 0px));
        }
        body:has(.wh462-sticky-cta) .whatsapp_float {
            display: none;
        }
    }
    @media (max-width: 380px) {
        .wh462-sticky-cta .wh462-sticky-btn {
            font-size: 0.62rem;
            min-height: 48px;
            padding: 7px 4px;
        }
        .wh462-sticky-cta .wh462-sticky-btn i {
            font-size: 0.85rem;
        }
    }
</style>

<div class="wh462-page">

    {{-- Section 1: Hero banner (education-style) --}}
    <section class="hero-section-5 study-topic-hero" id="wh462-hero" style="background-image: url('{{ asset($img['hero_bg']) }}');">
        <div class="container">
            <div class="hero-content-5">
                <div class="topic-tag">{{ $hero['tagline'] }}</div>
                <div class="title">
                    <h1>{{ $hero['heading'] }}</h1>
                </div>
                <p class="hero-sub">{{ $hero['subheading'] }}</p>
                <div class="hero-content-1">
                    <div class="join-us">
                        <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                            {{ $hero['primary_cta'] }}
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                    <a class="wh462-btn-ghost" href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToHeroForm }}">{{ $hero['secondary_cta'] }}</a>
                </div>
                <p class="wh462-micro-cta"><a href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToHeroForm }}">{{ $hero['micro_cta'] }}</a></p>
            </div>
        </div>
    </section>

    {{-- Section 2: Intro copy attached to hero banner --}}
    <section class="study-topic-hero-band">
        <div class="container">
            <div class="band-card">
                <div class="band-stack">
                    <div class="band-copy">
                        <p>{{ $hero['content'] }}</p>
                        <p>{{ $hero['content2'] }}</p>
                    </div>
                    <div class="band-thumb">
                        <img
                            src="{{ asset($img['profile']) }}"
                            alt="Young traveller planning Australia Work and Holiday Visa Subclass 462"
                            width="240"
                            height="200"
                            loading="lazy"
                            decoding="async"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 3: Mirashka-style overview + eligibility form --}}
    <section class="wh462-hero-form-combo" id="wh462-hero-form">
        <div class="wh462-combo-split-bg" aria-hidden="true"></div>
        <div class="container">
            <div class="row wh462-combo-row g-4">
                <div class="col-lg-6">
                    <div class="wh462-combo-left">
                        <div class="wh462-combo-intro-head">
                            <span class="wh462-combo-eyebrow">{{ $overview['tagline'] }}</span>
                            <h2>{{ $overview['heading'] }}</h2>
                            <p class="overview-sub">{{ $overview['subheading'] }}</p>
                        </div>
                        <div class="wh462-combo-overview-body">
                            <p class="overview-body">{{ $overview['content'] }}</p>
                            <div class="row row-gap-3 wh462-overview-visual-grid">
                                @foreach ($overview['cards'] as $card)
                                    <div class="col-md-6">
                                        <div class="study-path-visual-card" style="background-image: url('{{ asset($card['image']) }}');">
                                            <div class="study-path-visual-inner">
                                                <div class="study-path-icon"><i class="{{ $card['icon'] }}" aria-hidden="true"></i></div>
                                                <h3>{{ $card['title'] }}</h3>
                                                <p>{{ $card['text'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wh462-combo-form-wrap">
                        {!! wh462_form_markup('wh462-hero-form-inner', $countries, array_merge($form, ['heading' => 'Send your details']), false, true, false, 'wh462-enquiry-form--hero') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 4: Who Should Apply --}}
    <section class="wh462-who-section">
        <div class="wh462-who-intro">
            <div class="container">
                <div class="text-center">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <span>{{ $who['tagline'] }}</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>{{ $who['heading'] }}</h2>
                    </div>
                    <div class="w-line m-auto"></div>
                    <p class="wh462-who-intro-lead m-b-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">{{ $who['subheading'] }}</p>
                </div>
            </div>
        </div>

        <div class="wh462-who-body">
            <div class="container">
                <div class="row align-items-stretch row-gap-4 g-lg-4">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="wh462-who-image">
                            <img src="{{ asset($img['intro']) }}" alt="Young travellers planning Australia work and holiday visa" width="480" height="320" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="wh462-who-content">
                            <p>{{ $who['content'] }}</p>
                            <p class="wh462-who-points-heading"><strong>This visa may be suitable if:</strong></p>
                            <div class="wh462-who-points">
                                @foreach ($who['points'] as $point)
                                    <div class="service">
                                        <i class="fa-solid fa-check"></i>
                                        <p>{{ $point }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wh462-cta-strip">
        <div class="container">
            <div class="strip-inner">
                <p>{{ $who['cta_text'] }}</p>
                <a class="e-primary-btn has-icon" href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToHeroForm }}">
                    {{ $who['cta_button'] }}
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
            </div>
        </div>
    </div>

    {{-- Section 4: Eligibility Check --}}
    <section class="services-we-offer-section wh462-eligibility-section">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span class="text-white">{{ $eligibility['tagline'] }}</span>
                </div>
                <div class="common-title style-color-light mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>{{ $eligibility['heading'] }}</h2>
                </div>
                <div class="w-line m-auto"></div>
                <p class="text-white m-t-20 m-b-10" style="font-size: 20px; font-weight: 600; line-height: 1.5;">{{ $eligibility['subheading'] }}</p>
                <p class="text-white" style="font-size: 16px; font-weight: 400; line-height: 1.75; opacity: 0.92; max-width: 980px; margin: 0 auto;">{{ $eligibility['content'] }}</p>
            </div>
            <div class="row row-gap-4 wh462-eligibility-grid" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                @foreach ($eligibility['factors'] as $index => $factor)
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="service-card-3">
                            <div class="service-top">
                                <h4>{{ $factor['title'] }}</h4>
                                <i class="{{ $factor['icon'] }}"></i>
                            </div>
                            <div class="service-content">
                                <p>{{ $factor['text'] }}</p>
                            </div>
                            <div class="i-shape"><span class="i-shape-num" aria-hidden="true">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center m-t-40">
                <a class="e-primary-btn has-icon is-hover-white" href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToHeroForm }}">
                    {{ $eligibility['cta'] }}
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
            </div>
        </div>
    </section>

    {{-- Section 6: Avoid mistakes — study page s5 layout --}}
    <section class="study-s5-visa wh462-guidance-section" id="wh462-guidance">
        <div class="container">
            <div class="row align-items-stretch row-gap-4 justify-content-center">
                <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                    <div class="study-s5-intro-card">
                        <div class="common-subtitle text-uppercase"><span>{{ $guidance['tagline'] }}</span></div>
                        <div class="common-title text-start m-b-15"><h2>{{ $guidance['heading'] }}</h2></div>
                        <p class="visa-lead visa-highlight m-t-10 m-b-0">{{ $guidance['subheading'] }}</p>
                        <p class="visa-lead m-t-25 m-b-0">{{ $guidance['content'] }}</p>
                        <p class="visa-lead m-t-20 m-b-0">{{ $guidance['content2'] }}</p>
                        <div class="m-t-30">
                            <a class="e-primary-btn has-icon" href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToHeroForm }}">
                                {{ $guidance['cta'] }}
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6" data-aos="fade-up" data-aos-delay="120">
                    <div class="study-s5-support-card">
                        <div class="study-s5-support-head">
                            <p class="study-s5-support-heading">{{ $guidance['mistakes_heading'] }}</p>
                        </div>
                        <ul class="study-support-list">
                            @foreach ($guidance['mistakes'] as $mistake)
                                <li>
                                    <span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                                    <span>{{ $mistake }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 7: Documents Required — homepage camping slider --}}
    <section class="our-camping-section overflow-x-clip wh462-documents-section" id="wh462-documents">
        <div class="container">
            <div class="row m-b-50 m-b-xs-40">
                <div class="col-xl-12">
                    <div class="text-center">
                        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span class="bg-p">{{ $documents['tagline'] }}</span>
                        </div>
                        <div class="common-title mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2>{{ $documents['heading'] }}</h2>
                        </div>
                        <div class="b-line m-auto"></div>
                        <p class="m-t-20 m-b-10 wh462-documents-lead" style="font-size: 20px; font-weight: 600; line-height: 1.5;">{{ $documents['subheading'] }}</p>
                        <p class="wh462-documents-lead m-b-0" style="font-size: 16px; font-weight: 400; line-height: 1.75; color: #6b6b6b;">{{ $documents['content'] }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="camping-slider-active" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($documents['categories'] as $category)
                                    <div class="swiper-slide">
                                        <div class="camping-card">
                                            <div class="thumb">
                                                <img src="{{ asset($category['image']) }}" alt="{{ $category['title'] }}" width="600" height="400" loading="lazy" decoding="async">
                                            </div>
                                            <div class="content">
                                                <div class="content-top">
                                                    <div class="title">
                                                        <h3>{!! preg_replace('/\s/', '<br> ', e($category['title']), 1) !!}</h3>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{ $category['text'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="camping-pagination-wrap">
                            <div class="camping-pagination"></div>
                        </div>
                        <div class="camping-button-prev">
                            <i class="fa-regular fa-arrow-left"></i>
                        </div>
                        <div class="camping-button-next">
                            <i class="fa-regular fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-40">
                <a class="e-primary-btn has-icon" href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToHeroForm }}">
                    {{ $documents['cta'] }}
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
            </div>
        </div>
    </section>

    {{-- Section 8: Process — homepage completed-project layout --}}
    <section class="completed-project-section wh462-process-section" id="wh462-process">
        <div class="completed-project-top">
            <div class="container">
                <div class="row align-items-center m-b-60 m-b-xs-40">
                    <div class="col-md-9">
                        <div class="common-subtitle style-color-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span class="text-white"><strong>{{ $process['tagline'] }}</strong></span>
                        </div>
                        <div class="common-title style-color-light text-start m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2 class="fs-1 pb-3">{{ $process['heading'] }}</h2>
                            <div class="w-line"></div>
                            <p class="text-white m-t-15 m-b-0" style="max-width: 90%;">{{ $process['subheading'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a class="e-primary-btn has-icon active" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" href="{{ url('book-appointment') }}">
                            {{ $process['cta'] }}
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="shape-8"><img src="{{ asset('assets/img/shapes/shape-8.webp') }}" alt="Decorative section shape" width="200" height="200" loading="lazy" decoding="async"></div>
            <div class="shape-9"><img src="{{ asset('assets/img/shapes/shape-9.webp') }}" alt="Decorative section shape" width="200" height="200" loading="lazy" decoding="async"></div>
        </div>
        <div class="completed-project-bottom">
            <div class="container">
                <div class="row row-gap-4">
                    @foreach ($process['steps'] as $index => $step)
                        <div class="col-lg-4 col-md-6">
                            <div class="project-card">
                                <div class="thumb">
                                    <a href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToHeroForm }}">
                                        <img src="{{ asset($step['image']) }}" alt="{{ $step['title'] }}" width="600" height="450" loading="lazy" decoding="async">
                                    </a>
                                    <div class="number"><span>{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span></div>
                                    <div class="content">
                                        <h5>{{ $step['title'] }}</h5>
                                        <p>{{ $step['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Section 9: Comparison — homepage skilled/sponsored layout --}}
    <section class="volunteer-section wh462-compare-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" id="wh462-comparison">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span class="bg-p">{{ $comparison['tagline'] }}</span>
                </div>
                <div class="common-title mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>{{ $comparison['heading'] }}</h2>
                </div>
                <div class="b-line m-auto"></div>
                <p class="m-t-20 m-b-10" style="font-size: 20px; font-weight: 600; line-height: 1.5;">{{ $comparison['subheading'] }}</p>
                <p style="font-size: 16px; font-weight: 400; line-height: 1.75; color: #6b6b6b; max-width: min(980px, 96vw); margin: 0 auto;">{{ $comparison['intro'] }}</p>
            </div>

            <div class="row row-gap-4 justify-content-center wh462-compare-grid" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                @foreach ($comparison['options'] as $option)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-card" style="background-image: linear-gradient({{ $option['gradient'] }}), url('{{ asset($option['image']) }}'); background-size: cover; background-position: center;">
                            @if (($option['align'] ?? 'left') === 'right')
                                <div class="service-top">
                                    <h4 class="text-end">{{ $option['title'] }}</h4>
                                    <i><img src="{{ asset($option['icon']) }}" alt="{{ $option['title'] ?? 'Visa comparison icon' }}" width="46" height="46" loading="lazy" decoding="async"></i>
                                </div>
                                <div class="service-content">
                                    <p class="text-end" style="margin-left: auto;">{{ $option['text'] }}</p>
                                </div>
                            @else
                                <div class="service-top">
                                    <h4>{{ $option['title'] }}</h4>
                                    <i><img src="{{ asset($option['icon']) }}" alt="{{ $option['title'] ?? 'Visa comparison icon' }}" width="46" height="46" loading="lazy" decoding="async"></i>
                                </div>
                                <div class="service-content">
                                    <p>{{ $option['text'] }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center m-t-40">
                <p class="m-b-25">{{ $comparison['footer'] }}</p>
                <a class="e-primary-btn has-icon is-hover-white" href="{{ url('contact-us') }}">
                    {{ $comparison['cta'] }}
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    {{-- Section 10: Why Choose Visawizer — homepage trust layout --}}
    <section class="services-section-3 wh462-why-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-color: #ffffff;" id="wh462-why">
        <div class="container">
            <div class="row wh462-why-row g-2 align-items-stretch">
                <div class="col-xl-5 col-lg-5">
                    <div class="section-top-9 text-center wh462-why-panel" style="background-image: linear-gradient(color-mix(in srgb, var(--wh462-accent) 44%, transparent), color-mix(in srgb, var(--wh462-accent) 44%, transparent)), url('{{ asset($why['panel_image']) }}'); background-size: cover; background-position: center; border-radius: 6px;" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="wh462-why-panel__inner">
                            <div class="common-subtitle text-uppercase justify-content-center">
                                <span class="bg-p">{{ $why['tagline'] }}</span>
                            </div>
                            <div class="common-title">
                                <h2 class="text-white">{{ $why['heading'] }}</h2>
                            </div>
                            <div class="w-line m-auto"></div>
                            <p class="text-white">{{ $why['subheading'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="row wh462-why-cards g-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        @foreach ($why['cards'] as $index => $card)
                            <div class="col-md-4 col-sm-6">
                                <div class="service-card-3">
                                    <div class="service-top">
                                        <h4>{{ $card['title'] }}</h4>
                                        <i class="{{ $card['icon'] }}"></i>
                                    </div>
                                    <div class="service-content">
                                        <p>{{ $card['text'] }}</p>
                                    </div>
                                    <div class="i-shape"><span class="i-shape-num" aria-hidden="true">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 10: Strong CTA Banner --}}
    @include('partials.commonCta', [
        'ctaBg' => asset($img['cta_bg']),
        'ctaEyebrow' => $finalCta['tagline'],
        'ctaHeading' => $finalCta['heading'],
        'ctaLead' => $finalCta['subheading'] . ' ' . $finalCta['supporting'],
        'ctaPrimaryLabel' => $finalCta['primary'],
        'ctaPrimaryUrl' => url('book-appointment'),
        'ctaSecondaryLabel' => $finalCta['secondary'],
        'ctaSecondaryUrl' => $wh462PageUrl,
        'ctaSecondaryOnclick' => $wh462ScrollToHeroForm,
    ])

    @include('partials.testi', [
        'testiIntroP1' => 'From eligibility checks to document guidance, we help applicants approach their Australia plans with confidence.',
        'testiIntroP2' => '',
        'testiEyebrow' => 'Real journeys, real guidance',
        'testiHeading' => 'Travellers trust Visawizer for <span>clear visa support</span>',
        'testimonials' => $testimonialSlides,
    ])

    {{-- Pre-FAQ enquiry form (independent instance from hero form) --}}
    <section class="wh462-pre-faq-form-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" id="wh462-faq-form">
        <div class="container">
            {!! wh462_form_markup('wh462-faq-form-inner', $countries, $form, false, true, false, 'wh462-enquiry-form--faq', true, 'wh462-form-card--prefaq') !!}
        </div>
    </section>

    @include('partials.faq', [
        'faqs' => $faqs,
        'faqAccordionId' => 'wh462FaqAccordion',
        'faqSectionClass' => 'wh462-faq-section',
        'faqCtaUrl' => url('contact-us'),
    ])

    @include('partials.blogs')

</div>

{{-- Sticky mobile CTA: Book Appointment | Submit Enquiry | Call Now --}}
<div class="wh462-sticky-cta" aria-label="Quick actions">
    <div class="sticky-inner">
        <a class="wh462-sticky-btn wh462-sticky-btn--book" href="{{ url('book-appointment') }}">
            <i class="fa-regular fa-calendar-check" aria-hidden="true"></i>
            <span>Book Appointment</span>
        </a>
        <a class="wh462-sticky-btn wh462-sticky-btn--enquiry" href="{{ $wh462PageUrl }}" onclick="{{ $wh462ScrollToFaqForm }}">
            <i class="fa-regular fa-paper-plane" aria-hidden="true"></i>
            <span>Submit Enquiry</span>
        </a>
        <a class="wh462-sticky-btn wh462-sticky-btn--call" href="tel:{{ preg_replace('/\s+/', '', config('site.phone1')) }}">
            <i class="fa-regular fa-phone" aria-hidden="true"></i>
            <span>Call Now</span>
        </a>
    </div>
</div>
@endsection

@push('scripts')
<script>
(function () {
    function clearWh462FormErrors($form) {
        $form.find('.text-danger').remove();
        $form.find('.is-invalid').removeClass('is-invalid');
        $form.find('.wh462-form-alert').addClass('d-none').text('');
    }

    function showWh462FormAlert($form, message) {
        $form.find('.wh462-form-alert').removeClass('d-none').text(message);
    }

    function validateWh462Form($form) {
        clearWh462FormErrors($form);

        var valid = true;
        var name = $form.find('[name="name"]');
        var nameVal = $.trim(name.val() || '');
        if (!nameVal || !/^[A-Za-z\s]+$/.test(nameVal)) {
            name.addClass('is-invalid');
            name.after('<small class="text-danger">Please enter a valid name</small>');
            valid = false;
        }

        var phone = $form.find('[name="phone"]');
        var phoneVal = $.trim(phone.val() || '');
        var phoneDigits = phoneVal.replace(/\D/g, '');
        if (!phoneVal || phoneDigits.length < 8 || phoneDigits.length > 15) {
            phone.addClass('is-invalid');
            phone.after('<small class="text-danger">Please enter a valid phone or WhatsApp number</small>');
            valid = false;
        }

        var email = $form.find('[name="email"]');
        var emailVal = $.trim(email.val() || '');
        if (!emailVal || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal)) {
            email.addClass('is-invalid');
            email.after('<small class="text-danger">Please enter a valid email</small>');
            valid = false;
        }

        if (!valid) {
            showWh462FormAlert($form, 'Please fix the highlighted fields and try again.');
        }

        return valid;
    }

    function initWh462EnquiryForm(selector) {
        var $form = $(selector);
        if (!$form.length) {
            return;
        }

        $form.on('submit', function (e) {
            e.preventDefault();

            if (!validateWh462Form($form)) {
                return false;
            }

            var residence = $.trim($form.find('[name="residence_country"]').val() || '');
            $form.find('[name="city"]').val(residence);

            var $btn = $form.find('.wh462-form-submit');
            var $btext = $btn.find('.btext');
            var original = $btext.text();
            $btext.text('Submitting...');
            $btn.prop('disabled', true);
            clearWh462FormErrors($form);

            $.ajax({
                url: '{{ url('wh462-enquiry') }}',
                type: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    if (res.status === 'success') {
                        window.location.href = '{{ url('thank-you') }}';
                        return;
                    }
                    $btext.text(original);
                    $btn.prop('disabled', false);
                    showWh462FormAlert($form, res.message || 'Something went wrong. Please try again.');
                },
                error: function (xhr) {
                    $btext.text(original);
                    $btn.prop('disabled', false);

                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function (key, messages) {
                            var $field = $form.find('[name="' + key + '"]');
                            if ($field.length) {
                                $field.addClass('is-invalid');
                                $field.after('<small class="text-danger">' + messages[0] + '</small>');
                            }
                        });
                        showWh462FormAlert($form, 'Please fix the highlighted fields and try again.');
                    } else {
                        showWh462FormAlert($form, 'Something went wrong. Please try again.');
                    }
                }
            });
        });
    }

    $(function () {
        initWh462EnquiryForm('#wh462-hero-form-inner .wh462-enquiry-form--hero');
        initWh462EnquiryForm('#wh462-faq-form-inner .wh462-enquiry-form--faq');
    });
})();
</script>
@endpush
