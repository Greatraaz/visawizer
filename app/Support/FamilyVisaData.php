<?php

namespace App\Support;

class FamilyVisaData
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
                'visa/partner-820-801',
                ['partner-visa-subclass-820-801'],
                'Partner Visa 820/801',
                '820/801',
                'Partner Visas',
                'fa-light fa-heart',
                ['Onshore partner visa pathway', 'Partner Visa Subclass 820/801 guidance for couples in Australia', 'Support for spouses and de facto partners applying from within Australia.', 'The Partner Visa 820/801 pathway allows the spouse or de facto partner of an Australian citizen, Australian permanent resident, or eligible New Zealand citizen to live in Australia. The 820 visa is temporary, and the 801 visa is the permanent stage of the onshore partner pathway.', 'Start 820/801 Review'],
                ['For couples already in Australia', 'This pathway may suit applicants who are in Australia and are married to, or in a de facto relationship with, an eligible Australian sponsor. The relationship must be genuine, continuing, and supported by consistent evidence.'],
                ['Relationship evidence', 'Your relationship story must be supported by proof', 'A strong partner visa application should show the history and depth of the relationship. Evidence may include joint finances, shared living arrangements, social recognition, commitment, communication history, travel together, photographs, and personal statements.'],
                ['Sponsor and applicant preparation', 'Both partners have important responsibilities', 'The applicant must prepare identity, relationship, character, health, and visa history documents. The sponsor must also provide identity, eligibility, relationship, and sponsorship-related documents.'],
                ['Common risk areas', 'Inconsistencies can weaken the case', ['Weak relationship timeline', 'Limited joint evidence', 'Conflicting dates or addresses', 'Poorly written statements', 'Missing sponsor details', 'Prior visa or relationship complications', 'Lack of explanation for gaps in evidence']],
                ['We help couples prepare a clear and complete application', 'Visawizer helps couples review eligibility, organise relationship evidence, prepare statements, understand sponsor requirements, and structure the application file.', 'Book Partner Visa Consultation'],
                ['strategy' => 'assets/images/services/image-43.webp']
            ),

            self::page(
                'visa/partner-309-100',
                ['partner-visa-subclass-309-100'],
                'Partner Visa 309/100',
                '309/100',
                'Partner Visas',
                'fa-light fa-ring',
                ['Offshore partner visa pathway', 'Partner Visa Subclass 309/100 guidance for couples applying from overseas', 'Support for spouses and de facto partners applying from outside Australia.', 'The Partner Visa 309/100 pathway allows the de facto partner or spouse of an Australian citizen, Australian permanent resident, or eligible New Zealand citizen to live in Australia. The 309 visa is provisional, and the 100 visa is the permanent stage of the offshore partner pathway.', 'Start 309/100 Review'],
                ['For couples separated by distance or living overseas', 'This visa may suit couples where the applicant is outside Australia and the sponsoring partner is an Australian citizen, permanent resident, or eligible New Zealand citizen.'],
                ['Long-distance relationship evidence', 'Distance does not reduce the need for proof', 'Offshore partner applications often require careful evidence of communication, visits, financial support, shared future plans, relationship history, and commitment despite physical distance.'],
                ['Sponsor eligibility and commitment', 'The sponsor’s role must be clearly documented', 'The sponsor must show eligibility, identity, relationship commitment, and support for the applicant. Sponsor documents should align with the applicant’s relationship evidence.'],
                ['Common documentation gaps', 'Offshore files need strong consistency', ['Missing communication records', 'Weak visit/travel evidence', 'Unclear relationship timeline', 'Limited social recognition proof', 'Poorly explained cultural or family context', 'Inconsistent names, dates, or addresses']],
                ['Support for couples across countries and timelines', 'Visawizer helps couples build a structured relationship file, prepare personal statements, review sponsor details, and organise offshore partner visa evidence.', 'Book Offshore Partner Visa Review']
            ),

            self::page(
                'visa/prospective-marriage-300',
                ['prospective-marriage-visa-subclass-300'],
                'Prospective Marriage Visa 300',
                '300',
                'Partner Visas',
                'fa-light fa-rings-wedding',
                ['Fiancé visa pathway', 'Prospective Marriage Visa Subclass 300 guidance', 'For eligible applicants who intend to come to Australia to marry their prospective spouse.', 'The Prospective Marriage Visa Subclass 300 lets a person come to Australia to marry their prospective spouse and then apply for a Partner visa. Home Affairs has also noted that from 1 July 2024, the Subclass 300 visa can be granted to applicants in or outside Australia.', 'Discuss Prospective Marriage Visa'],
                ['For engaged couples planning marriage in Australia', 'This pathway may suit couples who intend to marry after the applicant travels to Australia and then move toward a partner visa pathway.'],
                ['Evidence of genuine intention', 'Engagement and marriage plans must be credible', 'Applicants should show that the relationship is genuine and that both partners genuinely intend to marry. Evidence may include relationship history, engagement proof, communication, photographs, family awareness, and wedding planning details.'],
                ['Sponsor role', 'The Australian partner must support the application', 'The sponsor’s documents and statements should support the relationship history, marriage intention, and future plans as a couple.'],
                ['Common challenges', 'A weak engagement story can create doubt', ['Limited in-person meeting evidence', 'Unclear marriage plans', 'Weak family or social proof', 'Inconsistent relationship timeline', 'Lack of future planning', 'Missing sponsor documents']],
                ['We help engaged couples prepare with confidence', 'Visawizer helps review eligibility, organise relationship and engagement evidence, prepare sponsor documents, and plan the next partner visa stage.', 'Book 300 Visa Consultation']
            ),

            self::page('visa/parent-103', ['parents-visa-subclass-103'], 'Parent Visa 103', '103', 'Parent Visas I', 'fa-light fa-people-roof',
                ['Permanent parent visa pathway', 'Parent Visa Subclass 103 guidance', 'A permanent visa pathway for eligible parents of settled Australian citizens, permanent residents, or eligible New Zealand citizens.', 'The Parent Visa Subclass 103 is a permanent visa that lets a parent of a settled Australian citizen, Australian permanent resident, or eligible New Zealand citizen move to Australia.', 'Review Parent Visa 103'],
                ['For parents seeking permanent reunification', 'This pathway may suit parents who meet sponsorship and family balance requirements and want a permanent parent visa option.'],
                ['Balance of Family Test', 'Family distribution is important', 'Many parent visa applications require the Balance of Family test. Home Affairs notes that this test applies to Parent 103, Contributory Parent 143, Temporary Contributory Parent 173, Aged Parent 804, Contributory Aged Parent 864, and Temporary Contributory Aged Parent 884.'],
                ['Sponsorship planning', 'The sponsor must be eligible and settled', 'A parent visa application usually depends on an eligible child sponsor who is an Australian citizen, permanent resident, or eligible New Zealand citizen and is settled in Australia.'],
                ['Document preparation', 'Build a complete family evidence file', ['Parent-child relationship evidence', 'Sponsor identity and status', 'Family structure documents', 'Balance of Family evidence', 'Identity documents', 'Health and character documents', 'Assurance of Support awareness, if applicable']],
                ['We help families plan parent migration carefully', 'Visawizer helps assess eligibility, review family balance, organise sponsor documents, and prepare the parent visa file.', 'Book Parent Visa Consultation']
            ),

            self::page('visa/contributory-parent-143', ['contributory-parent-visa-subclass-143'], 'Contributory Parent Visa 143', '143', 'Parent Visas I', 'fa-light fa-users',
                ['Contributory parent PR pathway', 'Contributory Parent Visa Subclass 143 guidance', 'A permanent parent visa option for eligible parents of settled Australian citizens, permanent residents, or eligible New Zealand citizens.', 'The Contributory Parent Visa Subclass 143 is a permanent visa that allows the parent of a settled Australian citizen, Australian permanent resident, or eligible New Zealand citizen to move to Australia.', 'Review 143 Visa Option'],
                ['For parents seeking a contributory permanent route', 'This pathway may suit eligible parents who want a permanent option and can meet the contributory parent visa requirements.'],
                ['Balance of Family Test', 'Eligibility starts with family structure', 'Applicants usually need to satisfy the Balance of Family test. This requires careful review of where the applicant’s children usually live and their migration status.'],
                ['Sponsorship and assurance planning', 'Family support must be documented', 'The sponsor relationship, settlement status, financial support considerations, and family documents should be organised carefully before submission.'],
                ['Contributory vs non-contributory planning', 'Compare parent visa options before deciding', 'Families should compare Subclass 143 with other parent visa options such as 103, 173, 804, 864, 870, and 884 based on location, age, timing, cost, and long-term goals.'],
                ['Structured guidance for contributory parent applications', 'Visawizer helps families understand eligibility, gather evidence, compare pathways, and prepare a complete contributory parent visa application.', 'Book 143 Consultation']
            ),

            self::page('visa/contributory-parent-temp-173', ['contributory-parent-temporary-visa-subclass-173'], 'Contributory Parent Temporary Visa 173', '173', 'Parent Visas I', 'fa-light fa-user-clock',
                ['Temporary contributory parent pathway', 'Contributory Parent Temporary Visa Subclass 173 guidance', 'A temporary pathway for eligible parents before a possible permanent contributory parent visa journey.', 'The Contributory Parent Temporary Visa Subclass 173 lets a parent of a settled Australian citizen, Australian permanent resident, or eligible New Zealand citizen stay temporarily in Australia.', 'Discuss 173 Visa'],
                ['For parents considering a staged contributory route', 'This pathway may suit parents who want a temporary contributory visa route and may later consider moving toward a permanent contributory parent visa.'],
                ['Temporary visa purpose', 'Understand what this visa does and does not do', 'Subclass 173 is temporary. Families should understand its duration, limits, and how it may fit into broader parent visa planning.'],
                ['Balance of Family Test', 'Family eligibility remains important', 'The Balance of Family test applies to Subclass 173, so applicants should review family distribution and evidence early.'],
                ['Evidence planning', 'Parent and sponsor documents must align', ['Sponsor identity and status', 'Parent-child relationship proof', 'Children’s location and status evidence', 'Identity documents', 'Health and character documents', 'Family structure records']],
                ['Guidance for staged parent visa planning', 'Visawizer helps families assess whether Subclass 173 fits their goals and organise the evidence required for a contributory parent pathway.', 'Book 173 Visa Review']
            ),

            self::page('visa/aged-parent-804', ['aged-parent-visa-subclass-804'], 'Aged Parent Visa 804', '804', 'Parent Visas I', 'fa-light fa-user-shield',
                ['Aged parent visa pathway', 'Aged Parent Visa Subclass 804 guidance', 'A permanent visa pathway for eligible aged parents applying from within Australia.', 'The Aged Parent Visa Subclass 804 is a permanent visa that allows an aged parent of a settled Australian citizen, Australian permanent resident, or eligible New Zealand citizen to stay in Australia.', 'Review 804 Visa Option'],
                ['For aged parents already in Australia', 'This pathway may suit eligible aged parents who are in Australia and meet the relevant family, sponsorship, and visa requirements.'],
                ['Age and location planning', 'The applicant’s age and location matter', 'Aged parent pathways require careful review of age-related eligibility and whether the applicant can lodge from within Australia.'],
                ['Balance of Family Test', 'Family distribution remains central', 'The Balance of Family test applies to Aged Parent Visa 804 and should be reviewed before lodging.'],
                ['Documentation planning', 'Prepare the family file carefully', ['Parent-child relationship proof', 'Sponsor evidence', 'Identity documents', 'Children’s country of residence evidence', 'Health and character documents', 'Current visa status', 'Family structure documents']],
                ['Support for aged parent visa planning', 'Visawizer helps review eligibility, sponsor readiness, evidence, timing, and long-term family planning for Subclass 804.', 'Book 804 Consultation']
            ),

            self::page('visa/contributory-aged-parent-864', ['contributory-aged-parent-visa-subclass-864'], 'Contributory Aged Parent Visa 864', '864', 'Parent Visas II', 'fa-light fa-handshake-angle',
                ['Contributory aged parent PR', 'Contributory Aged Parent Visa Subclass 864 guidance', 'A permanent visa pathway for eligible aged parents of settled Australian children.', 'The Contributory Aged Parent Visa Subclass 864 is a permanent visa that lets an aged parent of a settled Australian citizen, Australian permanent resident, or eligible New Zealand citizen stay in Australia.', 'Review 864 Visa'],
                ['For eligible aged parents seeking permanent stay', 'This visa may suit eligible aged parents who are in Australia and want a contributory permanent parent visa option.'],
                ['Balance of Family Test', 'Family structure must support eligibility', 'The Balance of Family test applies to Subclass 864 and should be reviewed carefully before applying.'],
                ['Contributory route planning', 'Understand the contributory parent visa structure', 'Families should compare 864 with other aged parent and contributory parent pathways to choose a suitable route based on age, location, timing, and long-term goals.'],
                ['Evidence and sponsorship', 'Sponsor and parent evidence must be complete', ['Sponsor identity and status', 'Parent-child relationship proof', 'Family balance evidence', 'Current visa status', 'Health and character documents', 'Assurance-related planning, where relevant']],
                ['Guidance for contributory aged parent applications', 'Visawizer helps families assess eligibility, compare pathways, prepare documents, and structure the 864 visa application.', 'Book 864 Consultation']
            ),

            self::page('visa/sponsored-parent-870', ['sponsored-parent-temporary-visa-subclass-870'], 'Sponsored Parent Temporary Visa 870', '870', 'Parent Visas II', 'fa-light fa-file-signature',
                ['Longer temporary parent stay', 'Sponsored Parent Temporary Visa Subclass 870 guidance', 'A temporary parent visa option for eligible parents sponsored by their Australian child.', 'The Sponsored Parent Temporary Visa Subclass 870 lets a parent of an Australian citizen, Australian permanent resident, or eligible New Zealand citizen visit Australia for up to 3 or 5 years.', 'Discuss 870 Visa'],
                ['For families wanting longer parent visits', 'Subclass 870 may suit families who want parents to spend extended time in Australia without immediately applying for permanent parent migration.'],
                ['Sponsor approval first', 'Sponsorship is a key first step', 'The sponsoring child generally needs to meet sponsorship requirements before the parent can apply for the visa. Families should plan the sponsor and applicant steps carefully.'],
                ['Temporary stay planning', 'This is not a permanent parent visa', 'Families should understand that Subclass 870 is temporary and should be planned differently from permanent parent visa options such as 103, 143, 804, or 864.'],
                ['Documents to prepare', 'Sponsor and parent documents both matter', ['Sponsor identity and residence status', 'Parent-child relationship evidence', 'Parent identity documents', 'Health insurance or health-related planning', 'Financial and family situation details', 'Intended stay explanation']],
                ['Support for parent visit planning', 'Visawizer helps families understand the sponsor step, applicant documents, temporary stay planning, and timing for Subclass 870.', 'Book 870 Visa Review']
            ),

            self::page('visa/contributory-aged-parent-temp-884', ['contributory-aged-parent-temporary-visa-subclass-884'], 'Contributory Aged Parent Temporary Visa 884', '884', 'Parent Visas II', 'fa-light fa-user-check',
                ['Temporary aged parent pathway', 'Contributory Aged Parent Temporary Visa Subclass 884 guidance', 'A temporary contributory visa pathway for eligible aged parents in Australia.', 'The Contributory Aged Parent Temporary Visa Subclass 884 lets the aged parent of a settled Australian citizen, Australian permanent resident, or eligible New Zealand citizen stay temporarily in Australia.', 'Review 884 Visa'],
                ['For aged parents considering a staged route', 'This visa may suit eligible aged parents in Australia who want a temporary contributory parent option before considering a permanent aged parent pathway.'],
                ['Temporary visa role', 'Understand its place in long-term planning', 'Subclass 884 is temporary. Families should understand how it may connect with future aged contributory parent visa planning.'],
                ['Balance of Family Test', 'Family balance must be reviewed early', 'The Balance of Family test applies to Subclass 884, so families should prepare evidence of where children usually live and their status.'],
                ['Evidence planning', 'Prepare parent and sponsor documents carefully', ['Parent-child relationship proof', 'Sponsor identity and status', 'Children’s residence evidence', 'Current visa status', 'Identity and civil documents', 'Health and character documents']],
                ['Guidance for temporary aged parent visa planning', 'Visawizer helps families review whether 884 fits their circumstances, prepare documents, and plan the possible next stage.', 'Book 884 Consultation']
            ),

            self::childPage('visa/child-101', ['child-visa-subclass-101'], 'Child Visa 101', '101', 'Offshore child visa pathway', 'Child Visa Subclass 101 guidance', 'Support for eligible children outside Australia joining a parent in Australia.', 'Child Visa Subclass 101 is listed as a family migration pathway for eligible children. Home Affairs includes Subclass 101 among family visa processing priority categories and family migration options.', 'Discuss Child Visa 101', 'For children applying from outside Australia', 'This visa may suit eligible dependent children outside Australia whose parent is an Australian citizen, Australian permanent resident, or eligible New Zealand citizen.', 'Book Child Visa Review'),
            self::childPage('visa/adoption-102', ['adoption-visa-subclass-102'], 'Adoption Visa 102', '102', 'Adoption visa pathway', 'Adoption Visa Subclass 102 guidance', 'Support for eligible adopted children outside Australia joining adoptive parents in Australia.', 'Adoption Visa Subclass 102 is listed by Home Affairs as a family visa option. It applies to eligible adoption situations where an adopted child is joining family in Australia.', 'Review Adoption Visa', 'For eligible adopted children outside Australia', 'This pathway may suit children who have been, or are being, adopted and need to migrate to Australia to live with their adoptive parent or parents.', 'Book Adoption Visa Consultation'),
            self::remainingPage('visa/remaining-relative-115', ['remaining-relative-visa-subclass-115'], 'Remaining Relative Visa 115', '115', 'Offshore remaining relative pathway', 'Remaining Relative Visa Subclass 115 guidance', 'Support for eligible applicants outside Australia whose only near relatives are living in Australia.', 'Remaining Relative Visa Subclass 115 is an other family visa pathway. Home Affairs notes that other family visas offer permanent options for remaining relatives of settled Australian citizens, permanent residents, or eligible New Zealand citizens.', 'Review Remaining Relative 115', 'For applicants with no near relatives outside Australia', 'This pathway may suit eligible people outside Australia whose close family connections are in Australia and who meet the remaining relative criteria.', 'Book Remaining Relative Review'),
            self::carerPage('visa/carer-116', ['carer-visa-subclass-116'], 'Carer Visa 116', '116', 'Offshore carer visa pathway', 'Carer Visa Subclass 116 guidance', 'Support for eligible applicants outside Australia who need to provide long-term care to a relative in Australia.', 'Carer Visa Subclass 116 is part of Australia’s other family visa options. Home Affairs includes carer visas among permanent family options for relatives of settled Australian citizens, permanent residents, or eligible New Zealand citizens.', 'Review Carer Visa 116', 'For relatives needed to provide care in Australia', 'This pathway may suit applicants outside Australia who need to move to Australia to provide substantial and continuing care to an eligible relative with a long-term medical condition.', 'Book Carer Visa Consultation'),
            self::orphanPage('visa/orphan-relative-117', ['orphan-relative-visa-subclass-117'], 'Orphan Relative Visa 117', '117', 'Offshore orphan relative pathway', 'Orphan Relative Visa Subclass 117 guidance', 'Support for eligible children outside Australia who need to live with a relative in Australia.', 'The Orphan Relative Visa Subclass 117 lets a child who is single come to Australia to live with a relative if their parents are deceased, cannot care for them, or cannot be found.', 'Discuss Orphan Relative 117', 'For children needing family care in Australia', 'This pathway may suit eligible children outside Australia who have no parent able to care for them and have an eligible relative in Australia.', 'Book 117 Visa Review'),
            self::childPage('visa/child-802', ['child-visa-subclass-802'], 'Child Visa 802', '802', 'Onshore child visa pathway', 'Child Visa Subclass 802 guidance', 'Support for eligible children in Australia applying to stay with a parent.', 'Child Visa Subclass 802 is listed among family visa options and applies to eligible child applicants in Australia.', 'Review Child Visa 802', 'For children already in Australia', 'This pathway may suit eligible dependent children who are in Australia and need to remain with an Australian citizen, permanent resident, or eligible New Zealand citizen parent.', 'Book 802 Visa Consultation'),
            self::carerPage('visa/carer-836', ['carer-visa-subclass-836'], 'Carer Visa 836', '836', 'Onshore carer visa pathway', 'Carer Visa Subclass 836 guidance', 'Support for eligible applicants in Australia who need to provide long-term care to a relative.', 'Carer Visa Subclass 836 is listed as an other family visa option for eligible relatives applying from within Australia. Home Affairs includes carer visas among permanent family migration options.', 'Review Carer Visa 836', 'For onshore applicants providing necessary care', 'This pathway may suit applicants already in Australia who need to provide substantial and continuing care to an eligible relative with a long-term medical condition.', 'Book 836 Visa Consultation'),
            self::orphanPage('visa/orphan-relative-837', ['orphan-relative-visa-subclass-837'], 'Orphan Relative Visa 837', '837', 'Onshore orphan relative pathway', 'Orphan Relative Visa Subclass 837 guidance', 'Support for eligible children in Australia who need to live with a relative.', 'The Orphan Relative Visa Subclass 837 lets a child stay in Australia with a relative if their parents are deceased, cannot care for them, or cannot be found.', 'Discuss Orphan Relative 837', 'For children already in Australia needing family care', 'This pathway may suit eligible children who are in Australia and need the care of a relative because their parents cannot care for them.', 'Book 837 Visa Review'),
            self::remainingPage('visa/remaining-relative-835', ['remaining-relative-visa-subclass-835'], 'Remaining Relative Visa 835', '835', 'Onshore remaining relative pathway', 'Remaining Relative Visa Subclass 835 guidance', 'Support for eligible applicants in Australia whose only near relatives are living in Australia.', 'Remaining Relative Visa Subclass 835 is listed among permanent family visa options. Home Affairs describes other family visas as permanent visa options for remaining relatives of settled Australian citizens, Australian permanent residents, or eligible New Zealand citizens.', 'Review Remaining Relative 835', 'For applicants already in Australia with close family in Australia', 'This pathway may suit eligible onshore applicants whose near relatives are settled in Australia and who meet remaining relative requirements.', 'Book 835 Visa Review'),
        ];

        return array_column($pages, null, '_key');
    }

    private static function page(string $key, array $aliases, string $label, string $subclass, string $category, string $icon, array $hero, array $suit, array $planning, array $strategy, array $challenges, array $support, array $images = []): array
    {
        $defaultImages = [
            'hero' => 'assets/images/services/banner-2.webp',
            'profile' => 'assets/images/services/image-21.webp',
            'support' => 'assets/images/services/image-52.webp',
            'intro_suit' => 'assets/images/services/banner-3.webp',
            'strategy' => 'assets/images/services/image-43.webp',
        ];

        return [
            '_key' => $key,
            'label' => $label,
            'subclass' => $subclass,
            'category' => $category,
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

    private static function childPage(string $key, array $aliases, string $label, string $subclass, string $tagline, string $heading, string $subheading, string $content, string $cta, string $suitHeading, string $suitContent, string $supportCta): array
    {
        $isAdoption = str_contains($key, 'adoption');
        return self::page($key, $aliases, $label, $subclass, 'Child & Relative Visas', $isAdoption ? 'fa-light fa-hands-holding-child' : 'fa-light fa-child',
            [$tagline, $heading, $subheading, $content, $cta],
            [$suitHeading, $suitContent],
            [$isAdoption ? 'Adoption evidence' : 'Parent-child relationship evidence', $isAdoption ? 'Adoption documents must be legally clear' : 'Relationship evidence is central', $isAdoption ? 'Adoption cases require careful documentation around the adoption process, legal status, parental responsibility, and the child’s relationship with the adoptive parent.' : 'Documents should clearly prove the relationship between the child and the sponsoring parent, including birth records, custody details, adoption or guardianship documents where relevant.'],
            [$isAdoption ? 'Country-specific considerations' : 'Dependency and care', $isAdoption ? 'Adoption processes can vary by country' : 'The child’s care situation must be clear', $isAdoption ? 'The evidence required may depend on the country where the adoption took place, local laws, and whether the adoption meets Australian migration requirements.' : 'Depending on the child’s age and circumstances, evidence may need to show dependency, living arrangements, financial support, and parental responsibility.'],
            [$isAdoption ? 'Child welfare focus' : 'Consent and custody considerations', $isAdoption ? 'The child’s best interests must be protected' : 'Legal care arrangements matter', $isAdoption ? 'Adoption visa applications should be prepared with careful attention to identity, care arrangements, consent, legal responsibility, and child welfare.' : 'Where only one parent is involved in the application, custody, consent, or legal responsibility documents may be important.'],
            [$isAdoption ? 'Support for adoption-related migration planning' : 'Support for families bringing children to Australia', $isAdoption ? 'Visawizer helps families review documentation, identify evidence gaps, and prepare a structured adoption visa application file.' : 'Visawizer helps families organise identity, relationship, custody, dependency, and sponsor evidence for this child visa pathway.', $supportCta],
            ['profile' => 'assets/images/services/image-52.webp']
        );
    }

    private static function remainingPage(string $key, array $aliases, string $label, string $subclass, string $tagline, string $heading, string $subheading, string $content, string $cta, string $suitHeading, string $suitContent, string $supportCta): array
    {
        return self::page($key, $aliases, $label, $subclass, 'Child & Relative Visas', 'fa-light fa-people-group',
            [$tagline, $heading, $subheading, $content, $cta],
            [$suitHeading, $suitContent],
            ['Family mapping', 'The family tree must be clear and complete', 'Remaining relative applications require detailed family structure evidence to show where near relatives live and how the applicant meets the criteria.'],
            ['Sponsor evidence', 'Sponsor eligibility must be documented', 'The sponsor’s Australian status, relationship to the applicant, settlement, and support role should be clearly evidenced.'],
            ['Queue and planning awareness', 'This can be a long-term pathway', 'Other family visas have limited annual places, and remaining relative queues can be long. Applicants should understand practical timing before applying.'],
            ['Guidance for complex remaining relative cases', 'Visawizer helps applicants review family structure, sponsor readiness, document gaps, and application strategy.', $supportCta]
        );
    }

    private static function carerPage(string $key, array $aliases, string $label, string $subclass, string $tagline, string $heading, string $subheading, string $content, string $cta, string $suitHeading, string $suitContent, string $supportCta): array
    {
        return self::page($key, $aliases, $label, $subclass, 'Child & Relative Visas', 'fa-light fa-hand-holding-heart',
            [$tagline, $heading, $subheading, $content, $cta],
            [$suitHeading, $suitContent],
            ['Medical and care evidence', 'The care need must be properly documented', 'Carer visa applications are highly evidence-based. Medical condition evidence, care needs, existing support options, and the applicant’s ability to provide care must be explained clearly.'],
            ['Sponsor and relative evidence', 'The family connection must be clear', 'The applicant must show the relationship with the person needing care and the sponsor must meet eligibility requirements.'],
            ['Common risk areas', 'Weak care evidence can affect the application', ['Insufficient medical evidence', 'Unclear care need', 'No explanation of why care cannot be reasonably obtained in Australia', 'Weak family relationship documents', 'Sponsor evidence gaps', 'Inconsistent care narrative']],
            ['Sensitive support for care-based family migration', 'Visawizer helps families understand the carer visa pathway, organise medical and family evidence, and prepare a structured application.', $supportCta]
        );
    }

    private static function orphanPage(string $key, array $aliases, string $label, string $subclass, string $tagline, string $heading, string $subheading, string $content, string $cta, string $suitHeading, string $suitContent, string $supportCta): array
    {
        return self::page($key, $aliases, $label, $subclass, 'Child & Relative Visas', 'fa-light fa-house-heart',
            [$tagline, $heading, $subheading, $content, $cta],
            [$suitHeading, $suitContent],
            ['Parent circumstance evidence', 'The child’s family situation must be clearly proven', 'Evidence may need to show that parents are deceased, missing, or unable to care for the child. This must be handled with sensitivity and strong documentation.'],
            ['Relative sponsor evidence', 'The Australian relative’s role is central', 'The sponsor must show their relationship to the child, eligibility, and ability to support the child in Australia.'],
            ['Child welfare and consent', 'Care arrangements must protect the child', 'Child welfare, custody, guardianship, consent, and legal responsibility documents may be important depending on the circumstances.'],
            ['Compassionate support for sensitive child visa cases', 'Visawizer helps families organise evidence, understand eligibility, and prepare the application with care and respect.', $supportCta],
            ['profile' => 'assets/images/area/image-31.webp']
        );
    }

    private static function bottom(): array
    {
        return [
            'testimonials' => [
                'intro1' => 'Hear from families who trusted Visawizer for partner, parent, child, carer, and relative visa guidance.',
                'intro2' => 'Real feedback from people who needed clarity, careful document planning, and calm support through important family visa decisions.',
            ],
            'cta' => [
                'eyebrow' => 'Family visa guidance',
                'heading' => 'Need help choosing the right family visa pathway?',
                'lead' => 'Family visa applications are deeply personal and document-sensitive. Visawizer helps you understand the right pathway, prepare evidence, and move ahead with clarity.',
                'primaryLabel' => 'Speak to an Expert',
                'primaryUrl' => url('contact-us'),
                'secondaryLabel' => 'Book Appointment',
                'secondaryUrl' => url('book-appointment'),
            ],
        ];
    }
}
