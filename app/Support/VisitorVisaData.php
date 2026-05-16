<?php

namespace App\Support;

class VisitorVisaData
{
    public static function get(string $slug): ?array
    {
        $resolved = self::resolveWithKey($slug);
        return $resolved['page'] ?? null;
    }

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
        $pages = [
            self::page(
                'visa/visitor-600',
                ['visitor-visa-subclass-600'],
                'Visitor Visa Subclass 600',
                '600',
                'fa-light fa-passport',
                ['Visitor Visa 600', 'Visitor Visa Subclass 600 guidance for Australia', 'Support for tourism, family visits, business visitor purposes, and other genuine short-stay travel plans.', 'The Visitor Visa Subclass 600 can allow people to visit Australia as tourists, visit family and friends, go on a cruise, or travel for permitted business visitor activities depending on the stream.', 'Start Visitor Visa Review'],
                ['For travellers who need a structured visitor visa application', 'Subclass 600 may suit travellers who are not eligible for ETA or eVisitor, need a longer visit, want to visit family, or need to explain their travel purpose with proper supporting evidence.'],
                ['Common visitor visa streams', 'Choose the stream that matches your purpose', 'The Visitor Visa 600 includes different streams, such as tourist, sponsored family, business visitor, and frequent traveller streams. The correct stream depends on the purpose of travel, applicant profile, sponsor or family connection, and location of application.'],
                ['Evidence that usually matters', 'A visitor visa is built on proof of genuine temporary stay', ['Travel purpose', 'Financial capacity', 'Employment or business ties', 'Family responsibilities', 'Property or home-country commitments', 'Invitation letter, where relevant', 'Travel history', 'Previous visa records']],
                ['Common mistakes', 'Avoid weak or incomplete visitor applications', ['Applying under the wrong stream', 'Vague travel plan', 'Weak employment or income proof', 'Missing leave approval', 'Inconsistent bank statements', 'No explanation of prior refusal', 'Weak family invitation evidence']],
                ['We help prepare a clearer Visitor Visa 600 application', 'Visawizer helps travellers review the right stream, organise evidence, prepare travel purpose explanations, and reduce avoidable documentation gaps.', 'Book Visitor Visa Consultation'],
                [
                    'hero' => 'assets/images/services/banner-1.webp',
                    'profile' => 'assets/images/services/image-21.webp',
                    'support' => 'assets/images/services/image-43.webp',
                    'strategy' => 'assets/images/services/banner-3.webp',
                ],
                [
                    ['eyebrow' => 'Family visit cases', 'heading' => 'Visiting family in Australia needs a clear invitation story', 'content' => 'If you are visiting family or friends, the application should include a proper invitation, relationship evidence, sponsor details where relevant, and an explanation of the visit purpose. Home Affairs advises applicants visiting family or friends to include an invitation letter, and if supporting someone in Australia, relevant evidence such as a doctor’s letter may help.'],
                ]
            ),

            self::page(
                'visa/e-visitor-651',
                ['evisitor-651', 'e-visitor-visa-subclass-651'],
                'E-Visitor Visa Subclass 651',
                '651',
                'fa-light fa-plane-departure',
                ['E-Visitor 651', 'E-Visitor Visa Subclass 651 guidance', 'Short-stay travel guidance for eligible passport holders visiting Australia for tourism or business visitor purposes.', 'The eVisitor Subclass 651 allows eligible travellers to visit Australia multiple times within a 12-month period and stay up to 3 months each time they enter Australia.', 'Check E-Visitor Eligibility'],
                ['For eligible passport holders planning short visits', 'This visa may suit eligible passport holders who want to visit Australia for tourism, to see family or friends, or undertake permitted business visitor activities for a short period.'],
                ['Travel purpose', 'The purpose must remain temporary and permitted', 'E-Visitor is generally used for short visits and business visitor activities. It is not a pathway for long-term employment, study beyond permitted limits, or permanent migration.'],
                ['Eligibility check', 'Passport eligibility matters first', 'Not every traveller can apply for eVisitor 651. Eligibility depends on passport nationality, purpose of travel, health and character considerations, and current immigration status.'],
                ['When eVisitor may not be enough', 'Some travellers need a different visitor option', 'If the applicant needs a longer stay, has complex travel history, prior refusals, family sponsorship needs, or does not hold an eligible passport, another visa such as Visitor 600 may be more suitable.'],
                ['We help you choose between 651 and other short-stay options', 'Visawizer helps travellers check pathway suitability, understand documents, and avoid choosing the wrong short-stay visa option.', 'Discuss E-Visitor Option'],
                [
                    'hero' => 'assets/images/services/banner-3.webp',
                    'profile' => 'assets/images/services/image-52.webp',
                    'support' => 'assets/images/services/image-21.webp',
                ]
            ),

            self::page(
                'visa/eta-601',
                ['electronic-travel-authority-601', 'eta-subclass-601'],
                'Electronic Travel Authority Subclass 601',
                '601',
                'fa-light fa-mobile-screen-button',
                ['ETA 601', 'Electronic Travel Authority Subclass 601 guidance', 'Short-stay travel authority guidance for eligible passport holders visiting Australia.', 'The Electronic Travel Authority Subclass 601 is a short-stay travel authority for eligible travellers. Home Affairs notes that European passport holders may be eligible for an eVisitor instead, and Australian citizens cannot apply for an ETA.', 'Check ETA Suitability'],
                ['For eligible travellers planning short visits', 'ETA 601 may suit eligible passport holders visiting Australia for tourism, family visits, or permitted business visitor activities.'],
                ['ETA vs eVisitor vs Visitor Visa', 'Similar purpose, different eligibility', 'ETA 601, eVisitor 651, and Visitor 600 can all relate to short stays, but eligibility, application method, passport rules, and suitability can differ.'],
                ['Key suitability checks', 'Check before applying', ['Passport eligibility', 'Travel purpose', 'Intended stay length', 'Prior visa history', 'Health and character background', 'Whether a longer visitor visa is needed']],
                ['Common issues', 'Fast does not mean automatic', 'Some ETA applications can need further assessment depending on the applicant’s history, purpose, or circumstances. Travellers should avoid assuming every ETA will be instant or straightforward.'],
                ['Get guidance before choosing ETA 601', 'Visawizer helps travellers understand whether ETA is suitable or whether another visitor visa pathway should be considered.', 'Book ETA Guidance'],
                [
                    'hero' => 'assets/images/services/banner-5.webp',
                    'profile' => 'assets/images/services/image-43.webp',
                    'support' => 'assets/images/services/image-52.webp',
                ]
            ),

            self::page(
                'visa/transit-771',
                ['transit-visa-subclass-771'],
                'Transit Visa Subclass 771',
                '771',
                'fa-light fa-route',
                ['Transit through Australia', 'Transit Visa Subclass 771 guidance', 'Support for travellers passing through Australia on the way to another country.', 'The Transit Visa Subclass 771 allows travellers to transit Australia for up to 72 hours on the way to another country. It may also be used if a person needs to join a ship as crew.', 'Check Transit Requirement'],
                ['For travellers connecting through Australia', 'This visa may suit travellers who need to pass through Australia and are not eligible to transit without a visa, or whose travel route requires them to clear immigration.'],
                ['Transit without visa check', 'Some travellers may not need a transit visa', 'Home Affairs states that some eligible travellers can transit Australia without a visa if they meet all required conditions. This should be checked carefully before travel.'],
                ['Airport and route planning', 'Airport arrangements can affect visa need', 'Australian airports may have limited transit facilities, and airport limitations can mean a traveller needs a visa to clear immigration even if other transit-without-visa conditions appear to be met.'],
                ['Evidence to prepare', 'A transit case should prove onward travel', ['Passport', 'Confirmed onward ticket', 'Visa for destination country, if required', 'Travel itinerary', 'Ship crew documents, if applicable', 'Explanation of transit route']],
                ['Avoid last-minute airport problems', 'Visawizer helps travellers review transit visa needs, onward travel evidence, airport routing issues, and application preparation.', 'Review My Transit Plan'],
                [
                    'hero' => 'assets/images/services/image-21.webp',
                    'profile' => 'assets/images/services/banner-1.webp',
                    'support' => 'assets/images/services/image-43.webp',
                ]
            ),

            self::page(
                'visa/work-holiday-417',
                ['working-holiday-417', 'working-holiday-visa-subclass-417'],
                'Working Holiday Visa Subclass 417',
                '417',
                'fa-light fa-suitcase-rolling',
                ['Work, travel, explore', 'Working Holiday Visa Subclass 417 guidance', 'Guidance for eligible young travellers planning an extended holiday in Australia with the option to work.', 'Home Affairs describes the first Working Holiday Visa 417 as allowing eligible people aged 18 to 30 to have their first extended holiday in Australia and work to help fund their trip.', 'Check 417 Eligibility'],
                ['For eligible young travellers from participating countries', 'Subclass 417 may suit eligible passport holders who want to travel in Australia for an extended holiday and undertake short-term work to support their trip.'],
                ['Purpose of the visa', 'Holiday first, work as support', 'This visa is designed for travel and cultural experience, with work allowed to help fund the stay. It should not be treated as a standard employment or permanent migration pathway.'],
                ['Eligibility planning', 'Check key requirements before applying', ['Age requirement', 'Passport eligibility', 'Health and character requirements', 'Funds and travel readiness', 'Previous working holiday history', 'Country-specific rules']],
                ['Second or third visa awareness', 'Future working holiday visas may need planning', 'Some applicants may later explore second or third working holiday options if they meet the required criteria. Planning early can help travellers understand what evidence to keep.'],
                ['Plan your working holiday with clarity', 'Visawizer helps travellers review eligibility, understand documents, avoid incorrect assumptions, and prepare their 417 visa application.', 'Book 417 Visa Review'],
                [
                    'hero' => 'assets/images/services/image-52.webp',
                    'profile' => 'assets/images/area/image-31.webp',
                    'support' => 'assets/images/services/banner-3.webp',
                ]
            ),

            self::page(
                'visa/work-holiday-462',
                ['work-and-holiday-462', 'work-and-holiday-visa-subclass-462'],
                'Work and Holiday Visa Subclass 462',
                '462',
                'fa-light fa-earth-asia',
                ['Work and holiday in Australia', 'Work and Holiday Visa Subclass 462 guidance', 'Support for eligible young travellers from participating countries planning to travel and work in Australia.', 'The Work and Holiday Visa Subclass 462 is a youth mobility visa category for eligible passport holders from participating countries who want to holiday in Australia and work during their stay. Home Affairs maintains the official Subclass 462 visa listing and eligibility details.', 'Check 462 Eligibility'],
                ['For eligible young travellers under country-specific arrangements', 'Subclass 462 may suit eligible applicants who meet age, passport, education, funds, and other requirements based on their country’s work and holiday arrangement with Australia.'],
                ['462 vs 417', 'Similar travel idea, different eligibility rules', 'Both 417 and 462 allow eligible young travellers to holiday and work in Australia, but they apply to different passport groups and may have different requirements.'],
                ['Documents to prepare', 'Evidence can vary by country', ['Passport', 'Identity documents', 'Funds evidence', 'Education evidence, where required', 'English evidence, where required', 'Letter of support, where applicable', 'Health and character documents']],
                ['Future visa planning', 'Keep records if you want future options', 'Some travellers may later consider a second or third work and holiday visa if they meet current requirements. Applicants should understand evidence requirements early and keep records properly.'],
                ['Prepare your 462 pathway with confidence', 'Visawizer helps applicants review eligibility, understand country-specific requirements, prepare documents, and avoid incorrect visa selection.', 'Book 462 Visa Consultation'],
                [
                    'hero' => 'assets/images/services/big6.webp',
                    'profile' => 'assets/images/services/image-52.webp',
                    'support' => 'assets/images/services/image-21.webp',
                ]
            ),
        ];

        return array_column($pages, null, '_key');
    }

    private static function page(string $key, array $aliases, string $label, string $subclass, string $icon, array $hero, array $suit, array $planning, array $strategy, array $challenges, array $support, array $images = [], array $extraSections = []): array
    {
        $defaultImages = [
            'hero' => 'assets/images/services/banner-1.webp',
            'profile' => 'assets/images/services/image-21.webp',
            'support' => 'assets/images/services/image-52.webp',
            'intro_suit' => 'assets/images/services/banner-3.webp',
            'strategy' => 'assets/images/services/image-43.webp',
        ];

        return [
            '_key' => $key,
            'label' => $label,
            'subclass' => $subclass,
            'category' => 'Visitor & Short Stay',
            'icon' => $icon,
            'aliases' => $aliases,
            'hero' => [
                'tagline' => $hero[0],
                'heading' => $hero[1],
                'subheading' => $hero[2],
                'content' => $hero[3],
                'cta' => $hero[4],
            ],
            'suit' => [
                'eyebrow' => 'Who this visa may suit',
                'heading' => $suit[0],
                'content' => $suit[1],
            ],
            'planning' => [
                'eyebrow' => $planning[0],
                'heading' => $planning[1],
                'content' => $planning[2],
            ],
            'strategy' => [
                'eyebrow' => $strategy[0],
                'heading' => $strategy[1],
                'content' => is_array($strategy[2]) ? null : $strategy[2],
                'points' => is_array($strategy[2]) ? $strategy[2] : null,
            ],
            'extraSections' => $extraSections,
            'challenges' => [
                'eyebrow' => $challenges[0],
                'heading' => $challenges[1],
                'content' => is_array($challenges[2]) ? null : $challenges[2],
                'points' => is_array($challenges[2]) ? $challenges[2] : null,
            ],
            'support' => [
                'heading' => $support[0],
                'content' => $support[1],
                'cta' => $support[2],
            ],
            'images' => array_merge($defaultImages, $images),
            'bottom' => self::bottom(),
        ];
    }

    private static function bottom(): array
    {
        return [
            'ctaBeforeTestimonials' => true,
            'testimonials' => [
                'intro1' => 'Hear from travellers who trusted Visawizer for visitor, ETA, eVisitor, transit, and working holiday visa guidance.',
                'intro2' => 'Real feedback from people who needed clearer short-stay pathway advice before applying or travelling.',
            ],
            'cta' => [
                'eyebrow' => 'Visitor visa guidance',
                'heading' => 'Not sure which Australian visitor or short-stay visa fits your travel plan?',
                'lead' => 'Visitor, ETA, eVisitor, transit, working holiday, and work and holiday options can look similar from the outside. Visawizer helps you choose the right route and prepare the application with clarity.',
                'primaryLabel' => 'Apply With Guidance',
                'primaryUrl' => url('contact-us'),
                'secondaryLabel' => 'Book Appointment',
                'secondaryUrl' => url('book-appointment'),
            ],
        ];
    }
}
