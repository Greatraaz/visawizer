<?php

namespace App\Support;

class WorkVisaData
{
    public static function get(string $slug): ?array
    {
        $pages = self::pages();

        if (isset($pages[$slug])) {
            return $pages[$slug];
        }

        foreach ($pages as $page) {
            if (in_array($slug, $page['aliases'] ?? [], true)) {
                return $page;
            }
        }

        return null;
    }

    public static function exists(string $slug): bool
    {
        return self::get($slug) !== null;
    }

    /**
     * URL path segment for work-skilled-migration/{segment} (strips leading "visa/").
     */
    public static function pathSlug(string $canonicalKey): string
    {
        if (str_starts_with($canonicalKey, 'visa/')) {
            return substr($canonicalKey, strlen('visa/'));
        }

        return $canonicalKey;
    }

    /**
     * Resolve a storage key or alias to the canonical pages() key plus page data.
     *
     * @return array{key: string, page: array}|null
     */
    public static function resolveWithKey(string $slug): ?array
    {
        $pages = self::pages();

        if (isset($pages[$slug])) {
            return ['key' => $slug, 'page' => $pages[$slug]];
        }

        foreach ($pages as $key => $page) {
            if (in_array($slug, $page['aliases'] ?? [], true)) {
                return ['key' => $key, 'page' => $page];
            }
        }

        return null;
    }

    public static function pages(): array
    {
        return [
            /* =================================================================
             * COLUMN 1 — SKILLED MIGRATION
             * ============================================================== */
            'visa/skilled-independent-189' => [
                'label' => 'Skilled Independent Visa 189',
                'subclass' => '189',
                'category' => 'Skilled Migration',
                'icon' => 'fa-light fa-user-graduate',
                'hero' => [
                    'tagline' => 'Skilled Independent Visa',
                    'heading' => 'Skilled Independent Visa Subclass 189 guidance',
                    'subheading' => 'A permanent skilled visa pathway for invited applicants with skills Australia needs.',
                    'content' => 'The Skilled Independent Visa Subclass 189 is for invited workers and eligible New Zealand citizens with skills Australia needs, allowing permanent residence and the ability to live and work anywhere in Australia.',
                    'cta' => 'Check 189 Eligibility',
                ],
                'suit' => [
                    'heading' => 'For skilled applicants without employer sponsorship',
                    'content' => 'Subclass 189 may suit skilled professionals who want a permanent pathway without needing employer sponsorship or state nomination, subject to invitation and eligibility.',
                    'points' => [
                        'Skilled occupation relevance',
                        'Strong points profile',
                        'Skills assessment readiness',
                        'English language ability',
                        'Age and experience suitability',
                        'Ability to submit a strong Expression of Interest',
                    ],
                ],
                'planning' => [
                    'eyebrow' => 'Core eligibility planning',
                    'heading' => 'Your points and occupation profile matter',
                    'content' => 'The 189 pathway is highly competitive. Applicants should carefully review their skilled occupation, points score, skills assessment, English test results, qualifications, and work experience before moving ahead.',
                ],
                'strategy' => [
                    'heading' => 'EOI planning is not just form filling',
                    'content' => 'SkillSelect is Australia’s online system for skilled workers to express interest in applying for skilled visas, and applicants need to be invited before applying for certain skilled visas.',
                ],
                'challenges' => [
                    'heading' => 'Avoid weak or premature applications',
                    'points' => [
                        'Incorrect occupation selection',
                        'Incomplete skills assessment planning',
                        'Overestimated points',
                        'Expired English or assessment documents',
                        'Weak supporting evidence',
                        'Poor timing around invitation rounds',
                    ],
                ],
                'support' => [
                    'heading' => 'Build a stronger skilled migration plan',
                    'content' => 'Visawizer helps applicants review eligibility, understand documentation requirements, prepare EOI direction, and plan their skilled migration journey with greater clarity.',
                    'cta' => 'Start 189 Visa Review',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-1.webp',
                    'profile' => 'assets/images/services/image-21.webp',
                    'support' => 'assets/images/services/image-43.webp',
                ],
            ],

            'visa/skilled-nominated-190' => [
                'label' => 'Skilled Nominated Visa 190',
                'subclass' => '190',
                'category' => 'Skilled Migration',
                'icon' => 'fa-light fa-map-location-dot',
                'hero' => [
                    'tagline' => 'State-nominated skilled visa',
                    'heading' => 'Skilled Nominated Visa Subclass 190 guidance',
                    'subheading' => 'A permanent skilled visa pathway for nominated skilled workers.',
                    'content' => 'The Skilled Nominated Visa Subclass 190 allows nominated skilled workers to live and work in Australia as permanent residents.',
                    'cta' => 'Check 190 Options',
                ],
                'suit' => [
                    'heading' => 'For skilled applicants seeking state or territory nomination',
                    'content' => 'Subclass 190 may suit skilled applicants whose occupation, experience, points profile, and background align with a state or territory’s nomination priorities.',
                ],
                'planning' => [
                    'eyebrow' => 'State nomination matters',
                    'heading' => 'Each state can have different priorities',
                    'content' => 'A strong 190 strategy requires understanding not only federal visa rules, but also state or territory nomination requirements, occupation demand, residency conditions, and invitation competitiveness.',
                ],
                'strategy' => [
                    'heading' => 'Your profile must be nomination-ready',
                    'points' => [
                        'Skills assessment',
                        'English language score',
                        'Occupation relevance',
                        'Work experience evidence',
                        'Qualification documents',
                        'State-specific criteria',
                        'EOI accuracy',
                    ],
                ],
                'challenges' => [
                    'heading' => 'Small errors can affect nomination potential',
                    'content' => 'Applicants often submit EOIs without understanding state criteria, occupation availability, document timing, or evidence requirements. A structured approach improves clarity before submission.',
                ],
                'support' => [
                    'heading' => 'Guidance for nomination-based migration',
                    'content' => 'Visawizer helps review your profile, compare possible state nomination opportunities, organise documentation, and guide you through the 190 planning process.',
                    'cta' => 'Book 190 Consultation',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-3.webp',
                    'profile' => 'assets/images/area/image-31.webp',
                    'support' => 'assets/images/services/image-52.webp',
                ],
            ],

            'visa/skilled-work-regional-491' => [
                'label' => 'Skilled Work Regional Visa 491',
                'subclass' => '491',
                'category' => 'Skilled Migration',
                'icon' => 'fa-light fa-map',
                'hero' => [
                    'tagline' => 'Regional skilled pathway',
                    'heading' => 'Skilled Work Regional Visa Subclass 491 guidance',
                    'subheading' => 'A provisional visa pathway for skilled workers who want to live and work in regional Australia.',
                    'content' => 'The Skilled Work Regional Provisional Visa Subclass 491 is for skilled people nominated by a state or territory government or sponsored by an eligible family member to live and work in regional Australia.',
                    'cta' => 'Explore 491 Pathway',
                ],
                'suit' => [
                    'heading' => 'For applicants open to regional opportunities',
                    'content' => 'The 491 pathway may suit skilled applicants whose occupation and profile align with regional demand and who are prepared to live, work, and study in a designated regional area.',
                ],
                'planning' => [
                    'eyebrow' => 'Regional commitment',
                    'heading' => 'Regional migration requires practical planning',
                    'content' => 'Applicants should understand designated regional areas, local employment opportunities, family considerations, and long-term settlement planning before choosing this pathway.',
                ],
                'strategy' => [
                    'heading' => 'Two possible routes may apply',
                    'content' => 'Subclass 491 can involve state or territory nomination or eligible family sponsorship. Each route needs careful eligibility review and evidence preparation.',
                ],
                'challenges' => [
                    'heading' => 'Understand the future 191 connection',
                    'content' => 'The regional visa structure can connect to the Permanent Residence Skilled Regional Visa 191, where eligible regional provisional visa holders may later apply after meeting requirements.',
                ],
                'support' => [
                    'heading' => 'Plan your regional migration journey properly',
                    'content' => 'Visawizer helps applicants review eligibility, regional suitability, nomination options, documentation, and future permanent residence planning.',
                    'cta' => 'Book 491 Visa Review',
                ],
                'images' => [
                    'hero' => 'assets/images/area/image-31.webp',
                    'profile' => 'assets/images/services/image-21.webp',
                    'support' => 'assets/images/area/image-71.webp',
                ],
            ],

            'visa/permanent-residence-skilled-regional-191' => [
                'label' => 'Skilled Regional PR Visa 191',
                'subclass' => '191',
                'category' => 'Skilled Migration',
                'icon' => 'fa-light fa-house-flag',
                'hero' => [
                    'tagline' => 'Regional PR pathway',
                    'heading' => 'Permanent Residence Skilled Regional Visa Subclass 191 guidance',
                    'subheading' => 'A permanent residence pathway for eligible regional provisional visa holders.',
                    'content' => 'The Permanent Residence Skilled Regional Visa Subclass 191 is for people who have lived, worked and studied in a designated regional area in Australia on a previous eligible visa.',
                    'cta' => 'Check 191 Readiness',
                ],
                'suit' => [
                    'heading' => 'For eligible 491 and 494 visa holders',
                    'content' => 'Subclass 191 is relevant for eligible holders of skilled regional provisional visas, including 491 and 494, who meet the required regional residence and other conditions.',
                ],
                'planning' => [
                    'eyebrow' => 'Regional evidence matters',
                    'heading' => 'Your regional history must be properly documented',
                    'content' => 'Applicants should prepare evidence showing their regional residence, work, study, tax records, and compliance history.',
                ],
                'strategy' => [
                    'heading' => 'Move from regional provisional status to PR',
                    'content' => 'The Department notes that Subclass 191 provides an independent permanent residence pathway for Subclass 491 and 494 holders.',
                ],
                'challenges' => [
                    'heading' => 'Do not wait until the final stage',
                    'points' => [
                        'Weak regional residence evidence',
                        'Missing income or tax records',
                        'Address inconsistencies',
                        'Employment evidence gaps',
                        'Misunderstood visa conditions',
                        'Delayed document planning',
                    ],
                ],
                'support' => [
                    'heading' => 'Prepare your 191 application with confidence',
                    'content' => 'Visawizer helps applicants review eligibility, organise regional evidence, understand document requirements, and prepare for the PR transition.',
                    'cta' => 'Book 191 PR Review',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-5.webp',
                    'profile' => 'assets/images/area/image-32.webp',
                    'support' => 'assets/images/area/image-41.webp',
                ],
            ],

            /* =================================================================
             * COLUMN 2 — EMPLOYER SPONSORED
             * ============================================================== */
            'visa/skills-in-demand-482' => [
                'label' => 'Skills in Demand Visa 482',
                'subclass' => '482',
                'category' => 'Employer Sponsored',
                'icon' => 'fa-light fa-building',
                'hero' => [
                    'tagline' => 'Employer-sponsored work visa',
                    'heading' => 'Skills in Demand Visa Subclass 482 guidance',
                    'subheading' => 'Helping skilled workers and employers understand the 482 sponsorship pathway.',
                    'content' => 'The Skills in Demand Visa Subclass 482 is a temporary visa that lets an employer sponsor a suitably skilled worker to fill a position they cannot find a suitably skilled Australian worker to fill.',
                    'cta' => 'Discuss 482 Sponsorship',
                ],
                'suit' => [
                    'heading' => 'For skilled workers with an Australian employer opportunity',
                    'content' => 'This visa may suit applicants who have a genuine job opportunity with an eligible Australian employer and meet skill, occupation, English, and other requirements.',
                ],
                'planning' => [
                    'eyebrow' => 'Employer readiness',
                    'heading' => 'Sponsorship is a shared process',
                    'content' => 'The employer’s role is central. The business may need to meet sponsorship, nomination, labour market, salary, and position-related requirements depending on the stream and circumstances.',
                ],
                'strategy' => [
                    'heading' => 'The worker profile must support the role',
                    'points' => [
                        'Relevant occupation',
                        'Skills and experience',
                        'English language ability',
                        'Identity and qualification documents',
                        'Employment history',
                        'Health and character requirements',
                    ],
                ],
                'challenges' => [
                    'heading' => 'Think beyond the temporary visa',
                    'content' => 'For some applicants, a 482 visa may later connect to employer nomination or permanent residence planning. Early strategy helps align current sponsorship with future options.',
                ],
                'support' => [
                    'heading' => 'Support for both employer and applicant',
                    'content' => 'Visawizer helps coordinate the sponsorship journey, identify document gaps, guide applicant preparation, and support employer-sponsored visa planning.',
                    'cta' => 'Start 482 Visa Review',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-3.webp',
                    'profile' => 'assets/images/services/image-22.webp',
                    'support' => 'assets/images/services/image-51.webp',
                ],
            ],

            'visa/employer-nomination-186-trt' => [
                'label' => 'Employer Nomination 186 TRT',
                'subclass' => '186 TRT',
                'category' => 'Employer Sponsored',
                'icon' => 'fa-light fa-handshake',
                'hero' => [
                    'tagline' => 'Employer-sponsored PR',
                    'heading' => 'Employer Nomination Scheme Subclass 186 TRT guidance',
                    'subheading' => 'A permanent residence pathway for eligible employer-sponsored workers through the Temporary Residence Transition stream.',
                    'content' => 'The Employer Nomination Scheme Subclass 186 is a permanent employer-sponsored visa. The TRT stream is designed for eligible workers transitioning from temporary sponsored employment to permanent residence through their employer.',
                    'cta' => 'Check 186 TRT Pathway',
                ],
                'suit' => [
                    'heading' => 'For workers already sponsored by an employer',
                    'content' => 'The TRT stream may suit applicants who have worked with their sponsoring employer in an eligible role and are now seeking employer-nominated permanent residence.',
                ],
                'planning' => [
                    'eyebrow' => 'Employer nomination',
                    'heading' => 'Employer nomination is central',
                    'content' => 'The employer must nominate the applicant for an eligible position and support the permanent role requirement. The role, business need, salary, and employment arrangement should be consistent and well documented.',
                ],
                'strategy' => [
                    'heading' => 'Build a complete applicant file',
                    'points' => [
                        'Passport and identity documents',
                        'Employment history',
                        'Current sponsored employment evidence',
                        'Qualification or skills evidence',
                        'English language evidence',
                        'Health and character documents',
                        'Family documents, where relevant',
                    ],
                ],
                'challenges' => [
                    'heading' => 'TRT applications need consistency',
                    'content' => 'Common challenges include mismatched job duties, weak employment evidence, salary inconsistencies, business documentation gaps, or misunderstanding the timing of eligibility.',
                ],
                'support' => [
                    'heading' => 'Prepare your TRT transition carefully',
                    'content' => 'Visawizer helps employers and applicants review eligibility, organise evidence, check nomination readiness, and plan the 186 TRT pathway.',
                    'cta' => 'Book 186 TRT Review',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-6.webp',
                    'profile' => 'assets/images/services/image-23.webp',
                    'support' => 'assets/images/services/image-53.webp',
                ],
            ],

            'visa/employer-nomination-186-de' => [
                'label' => 'Employer Nomination 186 Direct Entry',
                'subclass' => '186 DE',
                'category' => 'Employer Sponsored',
                'icon' => 'fa-light fa-arrow-right-to-bracket',
                'hero' => [
                    'tagline' => 'Direct employer-nominated PR',
                    'heading' => 'Employer Nomination Scheme Subclass 186 Direct Entry guidance',
                    'subheading' => 'A permanent employer-sponsored pathway for eligible skilled workers nominated directly by an Australian employer.',
                    'content' => 'The 186 Direct Entry pathway may suit applicants who are nominated by an Australian employer for a permanent skilled position and meet the eligibility requirements for direct entry.',
                    'cta' => 'Discuss 186 Direct Entry',
                ],
                'suit' => [
                    'heading' => 'For applicants with direct permanent employment opportunity',
                    'content' => 'This stream may suit skilled workers who may not be transitioning from a temporary sponsored visa but have a suitable employer nomination and a strong applicant profile.',
                ],
                'planning' => [
                    'eyebrow' => 'Role & occupation alignment',
                    'heading' => 'The nominated role must make sense',
                    'content' => 'The position, duties, salary, business need, applicant background, and occupation requirements should align clearly. Weak role alignment can create risk.',
                ],
                'strategy' => [
                    'heading' => 'Applicant strength must be documented',
                    'points' => [
                        'Skills assessment, where required',
                        'Relevant work experience',
                        'Qualification documents',
                        'English language evidence',
                        'Resume and employment references',
                        'Professional registration, where applicable',
                    ],
                ],
                'challenges' => [
                    'heading' => 'Business evidence should support the nomination',
                    'content' => 'Employer documents should demonstrate business legitimacy, role need, employment terms, and compliance with nomination expectations.',
                ],
                'support' => [
                    'heading' => 'Build a direct entry PR pathway with clarity',
                    'content' => 'Visawizer helps applicants and employers understand eligibility, prepare documentation, and coordinate the Direct Entry nomination and visa process.',
                    'cta' => 'Book 186 Direct Entry Consultation',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-4.webp',
                    'profile' => 'assets/images/services/image-13.webp',
                    'support' => 'assets/images/services/image-12.webp',
                ],
            ],

            'visa/skilled-employer-sponsored-494' => [
                'label' => 'Skilled Employer Sponsored Regional Visa 494',
                'subclass' => '494',
                'category' => 'Employer Sponsored',
                'icon' => 'fa-light fa-tractor',
                'hero' => [
                    'tagline' => 'Regional employer-sponsored visa',
                    'heading' => 'Skilled Employer Sponsored Regional Visa Subclass 494 guidance',
                    'subheading' => 'A regional sponsorship pathway for skilled workers and regional employers.',
                    'content' => 'The Skilled Employer Sponsored Regional Visa Subclass 494 enables regional employers to address identified labour shortages within their region by sponsoring skilled workers.',
                    'cta' => 'Explore 494 Sponsorship',
                ],
                'suit' => [
                    'heading' => 'For skilled workers with regional employer sponsorship',
                    'content' => 'Subclass 494 may suit skilled workers who have a genuine job offer from an eligible regional employer and are willing to live and work in regional Australia.',
                ],
                'planning' => [
                    'eyebrow' => 'Regional employer role',
                    'heading' => 'The employer must support the nomination',
                    'content' => 'The employer’s regional location, business need, nominated role, and sponsorship readiness are central to the visa pathway.',
                ],
                'strategy' => [
                    'heading' => 'The worker must match the role',
                    'points' => [
                        'Relevant occupation',
                        'Skills and experience',
                        'English ability',
                        'Qualifications',
                        'Health and character checks',
                        'Commitment to regional employment',
                    ],
                ],
                'challenges' => [
                    'heading' => 'Understand future 191 planning',
                    'content' => 'Subclass 494 can connect to the Subclass 191 permanent residence pathway for eligible regional provisional visa holders who meet requirements.',
                ],
                'support' => [
                    'heading' => 'Support for regional sponsorship planning',
                    'content' => 'Visawizer helps employers and applicants review eligibility, prepare evidence, understand regional conditions, and plan the 494 pathway.',
                    'cta' => 'Book 494 Visa Review',
                ],
                'images' => [
                    'hero' => 'assets/images/area/image-31.webp',
                    'profile' => 'assets/images/area/image-42.webp',
                    'support' => 'assets/images/area/image-72.webp',
                ],
            ],

            'visa/training-407-employer-sponsored' => [
                'label' => 'Training Visa 407 (Employer Sponsored)',
                'subclass' => '407',
                'category' => 'Employer Sponsored',
                'icon' => 'fa-light fa-chalkboard-user',
                'aliases' => [
                    'visa/training-407-work',
                ],
                'hero' => [
                    'tagline' => 'Workplace training pathway',
                    'heading' => 'Training Visa Subclass 407 guidance',
                    'subheading' => 'Support for structured occupational training and professional development activities in Australia.',
                    'content' => 'The Training Visa Subclass 407 is for occupational training and professional development activities. From March 2026, applicants must have an approved sponsor and nomination before applying for the visa.',
                    'cta' => 'Discuss 407 Training Visa',
                ],
                'suit' => [
                    'heading' => 'For training, not general employment',
                    'content' => 'Subclass 407 may suit applicants undertaking workplace-based training, professional development, or structured occupational training linked to their career or registration needs.',
                ],
                'planning' => [
                    'eyebrow' => 'Training types',
                    'heading' => 'The training purpose must be clear',
                    'content' => 'Home Affairs identifies different occupational training types for Subclass 407, and nomination requirements vary depending on the purpose or type of training.',
                ],
                'strategy' => [
                    'heading' => 'Sponsorship must be ready before visa application',
                    'content' => 'Because an approved sponsor and nomination are required before applying, both the training organisation and applicant need careful planning.',
                ],
                'challenges' => [
                    'heading' => 'Avoid treating 407 like a work visa',
                    'points' => [
                        'Unclear training purpose',
                        'Weak training plan',
                        'Missing nomination readiness',
                        'Poor evidence of career relevance',
                        'Incorrect sponsor setup',
                        'Timing issues with current visa status',
                    ],
                ],
                'support' => [
                    'heading' => 'Support for applicants and sponsors',
                    'content' => 'Visawizer helps review training purpose, sponsor readiness, nomination evidence, document planning, and visa preparation.',
                    'cta' => 'Book 407 Training Visa Review',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-2.webp',
                    'profile' => 'assets/images/services/image-62.webp',
                    'support' => 'assets/images/services/image-63.webp',
                ],
            ],

            /* =================================================================
             * COLUMN 3 — REGIONAL & SPECIAL STREAMS
             * ============================================================== */
            'visa/dama' => [
                'label' => 'DAMA',
                'subclass' => 'DAMA',
                'category' => 'Regional & Special Streams',
                'icon' => 'fa-light fa-file-contract',
                'hero' => [
                    'tagline' => 'Regional labour agreement pathway',
                    'heading' => 'DAMA visa guidance for regional workforce needs',
                    'subheading' => 'Understand how Designated Area Migration Agreements may support regional employers and skilled workers.',
                    'content' => 'A Designated Area Migration Agreement is a formal agreement between the Australian Government and a state, territory, or regional authority. DAMAs can provide access to more occupations than the standard skilled migration program and allow regions to respond to local labour market needs.',
                    'cta' => 'Explore DAMA Options',
                ],
                'suit' => [
                    'heading' => 'For regional employers and skilled workers',
                    'content' => 'DAMA may be relevant where a regional employer needs skilled labour and the occupation or concession may be available under an applicable regional agreement.',
                ],
                'planning' => [
                    'eyebrow' => 'Regional authority role',
                    'heading' => 'DAMA is agreement-based',
                    'content' => 'DAMA is not a single visa by itself. It operates through designated regional agreements and employer endorsement or labour agreement processes.',
                ],
                'strategy' => [
                    'heading' => 'Regional employer evidence matters',
                    'points' => [
                        'Business location',
                        'Genuine position need',
                        'Labour market evidence',
                        'Occupation alignment',
                        'Salary and employment terms',
                        'Regional endorsement process',
                    ],
                ],
                'challenges' => [
                    'heading' => 'The worker must still be suitable',
                    'content' => 'Applicants must prepare evidence of skills, qualifications, experience, identity, English ability, and suitability for the nominated role.',
                ],
                'support' => [
                    'heading' => 'Understand whether DAMA fits your case',
                    'content' => 'Visawizer helps employers and applicants review whether a DAMA pathway may be relevant and what evidence may be required.',
                    'cta' => 'Book DAMA Consultation',
                ],
                'images' => [
                    'hero' => 'assets/images/area/image-31.webp',
                    'profile' => 'assets/images/area/image-43.webp',
                    'support' => 'assets/images/area/image-73.webp',
                ],
            ],

            'visa/temporary-work-400' => [
                'label' => 'Temporary Work (Short Stay) Visa 400',
                'subclass' => '400',
                'category' => 'Regional & Special Streams',
                'icon' => 'fa-light fa-clock',
                'hero' => [
                    'tagline' => 'Short-term specialist work',
                    'heading' => 'Temporary Work Visa Subclass 400 guidance',
                    'subheading' => 'Support for short-term, highly specialised work assignments in Australia.',
                    'content' => 'Subclass 400 is generally used for short-term, highly specialised work where the applicant has specialist skills, knowledge, or experience needed for a limited period.',
                    'cta' => 'Discuss 400 Visa Need',
                ],
                'suit' => [
                    'heading' => 'For specialist short-stay work assignments',
                    'content' => 'This visa may suit applicants invited or required to undertake non-ongoing, specialised work in Australia for a short duration.',
                ],
                'planning' => [
                    'eyebrow' => 'Purpose & duration',
                    'heading' => 'The work purpose should be specific',
                    'content' => 'A strong Subclass 400 case should clearly explain the specialised nature of the work, why the applicant is needed, and why the stay is temporary.',
                ],
                'strategy' => [
                    'heading' => 'Build a clear short-stay work file',
                    'points' => [
                        'Invitation or work requirement',
                        'Specialist skill evidence',
                        'Employment background',
                        'Project or assignment details',
                        'Travel purpose',
                        'Financial and identity documents',
                    ],
                ],
                'challenges' => [
                    'heading' => 'Short stay does not mean casual preparation',
                    'content' => 'Applications may face difficulty where the work looks ongoing, the specialist need is unclear, or the supporting documents do not explain the assignment properly.',
                ],
                'support' => [
                    'heading' => 'Prepare a structured short-stay work application',
                    'content' => 'Visawizer helps applicants and inviting organisations understand the purpose, documentation, and suitability of the Subclass 400 pathway.',
                    'cta' => 'Book 400 Visa Review',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-1.webp',
                    'profile' => 'assets/images/services/image-3.webp',
                    'support' => 'assets/images/services/image-2.webp',
                ],
            ],

            'visa/temporary-activity-408' => [
                'label' => 'Temporary Activity Visa 408',
                'subclass' => '408',
                'category' => 'Regional & Special Streams',
                'icon' => 'fa-light fa-calendar-star',
                'hero' => [
                    'tagline' => 'Activity-based temporary stay',
                    'heading' => 'Temporary Activity Visa Subclass 408 guidance',
                    'subheading' => 'Support for eligible temporary activities, events, research, programs, and special-purpose stays in Australia.',
                    'content' => 'The Temporary Activity Visa Subclass 408 covers different activity streams. Home Affairs lists streams for activities such as entertainment, research, invited social or cultural activity, and special programs.',
                    'cta' => 'Discuss 408 Activity Visa',
                ],
                'suit' => [
                    'heading' => 'For specific activities, not general migration',
                    'content' => 'Subclass 408 may suit applicants coming to Australia for a defined temporary activity, approved program, event, research involvement, cultural participation, or similar purpose.',
                ],
                'planning' => [
                    'eyebrow' => 'Choose the right stream',
                    'heading' => 'The stream must match the activity',
                    'content' => 'The application should clearly connect the applicant’s purpose to the correct 408 stream. Choosing the wrong stream can weaken the application.',
                ],
                'strategy' => [
                    'heading' => 'Some activities may require sponsorship',
                    'content' => 'Certain activity-based visas may require an approved temporary activities sponsor. Home Affairs notes that temporary activities sponsorship can apply to streams across 403, 408, and 407.',
                ],
                'challenges' => [
                    'heading' => 'Evidence should prove the activity purpose',
                    'points' => [
                        'Invitation or event documents',
                        'Activity details',
                        'Sponsor or supporter evidence, where needed',
                        'Identity documents',
                        'Financial capacity',
                        'Previous experience or participation evidence',
                        'Temporary stay intention',
                    ],
                ],
                'support' => [
                    'heading' => 'Match your activity to the right visa stream',
                    'content' => 'Visawizer helps review your purpose, identify the correct stream, plan documentation, and prepare the application direction.',
                    'cta' => 'Book 408 Visa Consultation',
                ],
                'images' => [
                    'hero' => 'assets/images/services/banner-5.webp',
                    'profile' => 'assets/images/area/image-51.webp',
                    'support' => 'assets/images/area/image-52.webp',
                ],
            ],

            /* =================================================================
             * COLUMN 4 — TALENT & INNOVATION
             * ============================================================== */
            'visa/national-innovation-858' => [
                'label' => 'National Innovation Visa 858',
                'subclass' => '858',
                'category' => 'Talent & Innovation',
                'icon' => 'fa-light fa-lightbulb-on',
                'aliases' => [
                    'visa/distinguished-talent-858',
                ],
                'hero' => [
                    'tagline' => 'Exceptional talent pathway',
                    'heading' => 'National Innovation Visa Subclass 858 guidance',
                    'subheading' => 'A permanent visa pathway for exceptionally talented applicants with outstanding achievement in eligible areas.',
                    'content' => 'The National Innovation Visa Subclass 858 is a permanent visa for people who have an internationally recognised record of exceptional and outstanding achievement in an eligible area.',
                    'cta' => 'Assess Innovation Visa Potential',
                ],
                'suit' => [
                    'heading' => 'Use National Innovation, not old Distinguished Talent wording',
                    'content' => 'The older Subclass 124 and 858 Distinguished Talent structure has changed over time. Subclass 124 and 858 were consolidated into a single Subclass 858 pathway, and the National Innovation Visa replaced the former Global Talent visa in December 2024.',
                ],
                'planning' => [
                    'eyebrow' => 'Who this visa may suit',
                    'heading' => 'For established or emerging leaders',
                    'content' => 'The National Innovation Visa is positioned for exceptionally talented migrants who can make significant contributions to Australia’s future prosperity, including established and emerging leaders with high-calibre talent and skills.',
                ],
                'strategy' => [
                    'heading' => 'Achievement must be internationally recognised',
                    'points' => [
                        'Awards and recognition',
                        'Media coverage',
                        'Industry leadership',
                        'Publications or research impact',
                        'Commercial innovation',
                        'High-value entrepreneurship',
                        'Evidence of prominence in the field',
                    ],
                ],
                'challenges' => [
                    'heading' => 'This is not a standard skilled visa',
                    'content' => 'Unlike points-tested skilled migration, this pathway requires a strong achievements-based narrative. The applicant must show exceptional standing, benefit to Australia, and capacity to contribute meaningfully.',
                ],
                'support' => [
                    'heading' => 'Build a credible innovation visa profile review',
                    'content' => 'Visawizer helps applicants assess profile strength, evidence readiness, achievement positioning, and the suitability of the National Innovation Visa pathway.',
                    'cta' => 'Book 858 Profile Review',
                ],
                'images' => [
                    'hero' => 'assets/images/services/image-52.webp',
                    'profile' => 'assets/images/services/image-43.webp',
                    'support' => 'assets/images/services/image-21.webp',
                ],
            ],
        ];
    }

    public static function countries(): array
    {
        return StudyTopicData::countries();
    }
}
