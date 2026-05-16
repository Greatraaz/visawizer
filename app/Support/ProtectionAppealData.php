<?php

namespace App\Support;

class ProtectionAppealData
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
        return [
            'visa/art-review-appeals' => [
                'slug' => 'art-review-appeals',
                'aliases' => ['art-review-appeals'],
                'title' => 'ART Review Appeals Guidance | Visawizer',
                'description' => 'Understand ART review rights, appeal deadlines, documents, and next steps after a visa refusal or cancellation decision in Australia.',
                'keywords' => 'ART review appeals, visa refusal appeal Australia, visa cancellation review, Administrative Review Tribunal, Visawizer',
                'heroImage' => 'assets/images/area/image-31.webp',
                'accentLabel' => 'Appeals & Reviews',
                'hero' => [
                    'tagline' => 'Appeal guidance with urgency and care',
                    'heading' => 'ART Review Appeals guidance for visa refusal and cancellation matters',
                    'subheading' => 'Understand your review rights, deadlines, documents, and next steps after a visa refusal or cancellation decision.',
                    'content' => [
                        'Receiving a visa refusal or cancellation decision can be stressful and confusing. The first step is not panic. The first step is to read the decision carefully, confirm whether review rights exist, and understand the deadline.',
                        'The Administrative Review Tribunal has jurisdiction to review certain visa decisions made under the Migration Act 1958.',
                    ],
                    'primaryCta' => 'Review My Appeal Options',
                    'secondaryCta' => 'Book Confidential Consultation',
                ],
                'sections' => [
                    [
                        'eyebrow' => 'What is an ART review?',
                        'heading' => 'A review is different from submitting a fresh visa application',
                        'subheading' => 'The ART reviews eligible decisions and considers whether the original decision should stand or be changed.',
                        'content' => [
                            'An ART review may be available for certain visa refusal or cancellation decisions. The review process depends on the type of visa decision, the applicant\'s location, the decision letter, and the legal review rights available in that case.',
                            'Your decision letter is the starting point. It usually explains whether you can apply for review, where to apply, and the deadline.',
                        ],
                    ],
                ],
                'situations' => [
                    'heading' => 'Common situations where review guidance may be needed',
                    'subheading' => 'ART review matters should be assessed quickly because timelines can be strict.',
                    'items' => [
                        'Student visa refusal',
                        'Visitor visa refusal',
                        'Partner or family visa refusal',
                        'Sponsored visa refusal',
                        'Protection visa refusal',
                        'Visa cancellation',
                        'Refusal based on character or compliance concerns',
                        'Refusal due to weak evidence or incomplete documents',
                        'Refusal after previous visa history concerns',
                    ],
                    'note' => 'Home Affairs states that if an application is refused, the notification letter will detail whether the applicant has the right to seek review at the ART and provide instructions about appeal options.',
                ],
                'checklist' => [
                    'heading' => 'Do these checks before taking any next step',
                    'subheading' => 'A careful first review can prevent avoidable mistakes.',
                    'items' => [
                        ['title' => 'Decision Date', 'text' => 'The date of the refusal or cancellation decision.'],
                        ['title' => 'Review Deadline', 'text' => 'The final date by which the review must be lodged.'],
                        ['title' => 'Review Rights', 'text' => 'Whether the decision is reviewable by ART.'],
                        ['title' => 'Applicant Location', 'text' => 'Whether the applicant is inside or outside Australia can affect options.'],
                        ['title' => 'Current Visa Status', 'text' => 'Check whether you hold a visa or bridging visa and what conditions apply.'],
                        ['title' => 'Reasons for Refusal', 'text' => 'Understand exactly why the Department refused or cancelled the visa.'],
                    ],
                    'note' => 'Home Affairs advises people with a visa decision under review to continue checking their current visa details and conditions using VEVO.',
                ],
                'documents' => [
                    'heading' => 'A review file should be organised around the refusal reasons',
                    'subheading' => 'The goal is to respond to the issues raised in the decision, not simply repeat the original application.',
                    'items' => [
                        'Refusal or cancellation letter',
                        'Original visa application documents',
                        'Department correspondence',
                        'Identity and visa history records',
                        'Financial documents, where relevant',
                        'Relationship evidence, where relevant',
                        'Employment or study documents, where relevant',
                        'Sponsor documents, where relevant',
                        'Personal statement or written explanation',
                        'Additional supporting evidence',
                    ],
                ],
                'mistakes' => [
                    'heading' => 'Avoid weakening the review before it begins',
                    'subheading' => 'ART matters require focus, timing, and relevant evidence.',
                    'items' => [
                        'Missing the review deadline',
                        'Not reading the refusal reasons carefully',
                        'Submitting unrelated documents',
                        'Repeating the same weak evidence',
                        'Ignoring inconsistencies in the original application',
                        'Not checking current visa conditions',
                        'Assuming every refusal can be reviewed',
                        'Waiting too long to get advice',
                    ],
                ],
                'process' => [
                    'heading' => 'From decision review to case preparation',
                    'subheading' => 'We help you understand the refusal, organise evidence, and prepare the next step with clarity.',
                    'items' => [
                        ['title' => 'Decision Letter Review', 'text' => 'We review the refusal or cancellation letter and identify the key issues.'],
                        ['title' => 'Deadline and Status Check', 'text' => 'We help you understand urgent deadlines and current visa-status considerations.'],
                        ['title' => 'Evidence Gap Analysis', 'text' => 'We compare the refusal reasons with the available documents.'],
                        ['title' => 'Review Strategy Planning', 'text' => 'We help structure the case around the issues that matter.'],
                        ['title' => 'Document Preparation Support', 'text' => 'We help organise supporting evidence, statements, and additional material.'],
                        ['title' => 'Ongoing Guidance', 'text' => 'We support you through review preparation and next-step communication.'],
                    ],
                ],
                'finalCta' => [
                    'heading' => 'Received a visa refusal or cancellation? Act quickly.',
                    'subheading' => 'Speak with Visawizer to understand your review rights, deadline, and next step before time runs out.',
                    'primaryCta' => 'Get Appeal Guidance',
                    'secondaryCta' => 'Book Appointment',
                ],
            ],
            'visa/protection-visa-866' => [
                'slug' => 'protection-visa-866',
                'aliases' => ['protection-visa-866', 'visa/protection-866', 'protection-866'],
                'title' => 'Protection Visa Subclass 866 Guidance | Visawizer',
                'description' => 'Confidential Protection Visa Subclass 866 guidance for asylum seekers in Australia who fear persecution or significant harm if they return home.',
                'keywords' => 'Protection Visa Subclass 866, asylum seekers Australia, protection visa guidance, persecution, significant harm, Visawizer',
                'heroImage' => 'assets/images/services/image-21.webp',
                'accentLabel' => 'Protection Visa',
                'hero' => [
                    'tagline' => 'Protection matters need care',
                    'heading' => 'Protection Visa Subclass 866 guidance for asylum seekers in Australia',
                    'subheading' => 'Support for people in Australia who fear persecution or significant harm if they return to their home country.',
                    'content' => [
                        'The Protection Visa Subclass 866 is for people who arrived in Australia on a valid visa and want to seek asylum. If granted, it allows the person to stay in Australia permanently.',
                        'This is a serious and sensitive visa pathway. It should only be considered where there is a genuine protection concern supported by truthful facts and relevant evidence.',
                    ],
                    'primaryCta' => 'Get Confidential Advice',
                    'secondaryCta' => 'Book Protection Visa Consultation',
                ],
                'sections' => [
                    [
                        'eyebrow' => 'Who this visa is for',
                        'heading' => 'For genuine asylum seekers facing risk of harm or persecution',
                        'subheading' => 'Protection visas are not general stay-extension visas.',
                        'content' => [
                            'Home Affairs states that a Protection Visa Subclass 866 allows a person who is at real risk of significant harm or persecution in their home country to live in Australia permanently. It also clearly states that this visa is not for people who just want to stay longer in Australia to work.',
                            'This means the case must be built around genuine protection claims, not convenience, work plans, or general preference to remain in Australia.',
                        ],
                    ],
                    [
                        'eyebrow' => 'Eligibility and arrival considerations',
                        'heading' => 'How you arrived in Australia can matter',
                        'subheading' => 'Protection visa pathways depend on personal circumstances, arrival history, and the nature of the protection claim.',
                        'content' => [
                            'Home Affairs states that if a person arrived in Australia legally, they may be able to apply for a Protection Visa Subclass 866. The Department also distinguishes permanent protection from temporary protection arrangements depending on arrival circumstances and other factors.',
                            'Before applying, a careful review of visa history, arrival details, current status, and claim basis is essential.',
                        ],
                    ],
                    [
                        'eyebrow' => 'Protection claims and personal statement',
                        'heading' => 'Your story must be clear, truthful, and consistent',
                        'subheading' => 'Protection applications usually depend heavily on personal facts and supporting evidence.',
                        'content' => [
                            'The applicant\'s statement should explain what happened, why they fear returning, who may harm them, why protection is needed, and why they cannot safely relocate or receive protection in their home country.',
                            'This section must be handled carefully, respectfully, and truthfully. Overstating, copying generic templates, or creating inconsistent claims can seriously damage the case.',
                        ],
                    ],
                ],
                'situations' => null,
                'checklist' => null,
                'documents' => [
                    'heading' => 'Evidence should support the risk, background, and personal circumstances',
                    'subheading' => 'Not every case has the same documents, but the evidence should be relevant and consistent.',
                    'items' => [
                        'Identity and nationality documents',
                        'Visa and arrival history',
                        'Personal statement',
                        'Family or community evidence',
                        'Political, religious, ethnic, social, or personal-risk evidence where relevant',
                        'Police, court, threat, or complaint records where available',
                        'Country information',
                        'Medical or psychological reports where relevant',
                        'Prior incidents or harm evidence',
                        'Witness statements or support letters',
                    ],
                    'note' => 'Home Affairs advises people thinking about applying for protection to read important protection visa information and notes that translated resources are available.',
                ],
                'mistakes' => [
                    'heading' => 'Protection visa applications should never be treated casually',
                    'subheading' => 'Because the stakes are high, weak or careless applications can create serious long-term consequences.',
                    'items' => [
                        'Applying only to extend stay in Australia',
                        'Using copied or generic claims',
                        'Giving inconsistent facts',
                        'Hiding previous visa history',
                        'Submitting weak country-risk evidence',
                        'Ignoring contradictions in documents',
                        'Not explaining delay in applying',
                        'Missing important personal details',
                        'Not seeking proper advice before lodging',
                    ],
                ],
                'process' => [
                    'heading' => 'Confidential, sensitive, evidence-led guidance',
                    'subheading' => 'We help you understand whether this pathway may be relevant and how to prepare responsibly.',
                    'items' => [
                        ['title' => 'Confidential Case Discussion', 'text' => 'We listen to your background, concerns, and current immigration status.'],
                        ['title' => 'Visa History Review', 'text' => 'We review your arrival, current visa, past applications, and any Department correspondence.'],
                        ['title' => 'Claim Basis Review', 'text' => 'We help identify the core issues that may form the protection claim.'],
                        ['title' => 'Evidence Planning', 'text' => 'We help organise documents, statements, country information, and supporting material.'],
                        ['title' => 'Application Structure', 'text' => 'We assist in preparing a clear, consistent, and respectful application file.'],
                        ['title' => 'Next-Step Guidance', 'text' => 'We help you understand what may happen after lodgement and how to respond to further requests.'],
                    ],
                ],
                'finalCta' => [
                    'heading' => 'Need confidential guidance on a protection visa matter?',
                    'subheading' => 'Speak with Visawizer privately and understand whether the Protection Visa Subclass 866 pathway may be relevant to your situation.',
                    'primaryCta' => 'Get Confidential Advice',
                    'secondaryCta' => 'Book Appointment',
                ],
            ],
        ];
    }
}
