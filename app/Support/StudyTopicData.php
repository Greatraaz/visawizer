<?php

namespace App\Support;

class StudyTopicData
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

    public static function pages(): array
    {
        return [
            'education' => [
                'label' => 'Education',
                'hero' => [
                    'tagline' => 'Education guidance for Australia',
                    'heading' => 'Choose the right education pathway before you apply',
                    'subheading' => 'Get clear guidance on courses, institutions, eligibility, study goals, and long-term planning before starting your Australian education journey.',
                    'content' => 'Choosing where and what to study is one of the most important decisions in your international education journey. The right course can support your academic growth, career goals, and future opportunities. The wrong choice can lead to confusion, financial pressure, and unnecessary course changes.',
                    'cta' => 'Get Education Guidance',
                ],
                'section2' => [
                    'heading' => 'A course decision should match more than your marks',
                    'content' => 'Your academic background is important, but it is not the only factor. A strong study decision should consider your career interest, financial capacity, English readiness, location preference, future work goals, and visa considerations.',
                ],
                'section3' => [
                    'heading' => 'We help you assess the complete picture',
                    'points' => [
                        'Academic history',
                        'Preferred field of study',
                        'Budget and location preferences',
                        'Career goals',
                        'Institution options',
                        'Visa pathway relevance',
                        'Post-study possibilities',
                    ],
                ],
                'section4' => [
                    'heading' => 'Find a course that supports your future',
                    'content' => 'We help students compare possible courses and institutions based on suitability, not just popularity. The goal is to choose an education pathway that is practical, achievable, and aligned with your long-term plans.',
                ],
                'section5' => [
                    'heading' => 'Helping families make informed education decisions',
                    'content' => 'For many students, overseas education is a family decision. We help parents and students understand the process, expected steps, important documentation, and planning considerations.',
                ],
                'final' => [
                    'heading' => 'Start with the right education plan',
                    'subheading' => 'Speak to Visawizer before finalising your course or institution.',
                    'cta' => 'Book Education Consultation',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/education/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/education/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/education/sidebar.webp',
                    'section4' => 'assets/imgs/study/education/section4.webp',
                    'final_bg' => 'assets/imgs/study/education/final-bg.webp',
                ],
            ],
            'professional-year-programs' => [
                'label' => 'Professional Year Programs',
                'hero' => [
                    'tagline' => 'Bridge study and career',
                    'heading' => 'Professional Year Program guidance for eligible graduates',
                    'subheading' => 'Understand how Professional Year Programs may support your career readiness and future migration planning.',
                    'content' => 'A Professional Year Program can help eligible graduates build workplace readiness, understand Australian professional expectations, and improve career direction in selected fields.',
                    'cta' => 'Discuss Professional Year Options',
                ],
                'section2' => [
                    'heading' => 'Is a Professional Year Program suitable for you?',
                    'content' => 'This pathway may be relevant for graduates from selected disciplines who want structured professional exposure and career preparation after study.',
                ],
                'section3' => [
                    'heading' => 'Choose the right program with clarity',
                    'points' => [
                        'Understand eligibility',
                        'Compare program options',
                        'Plan timing carefully',
                        'Align with career goals',
                        'Review possible future pathway impact',
                    ],
                ],
                'section4' => [
                    'heading' => 'We help you evaluate your options',
                    'content' => 'Visawizer can help you understand which program options may suit your qualification, field, location, and timeline.',
                ],
                'section5' => [
                    'heading' => 'Prepare before you enrol',
                    'content' => 'We guide students on expected documents, enrolment steps, timeline planning, and the importance of matching program choice with long-term goals.',
                ],
                'final' => [
                    'heading' => 'Explore your Professional Year pathway',
                    'cta' => 'Book Consultation',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/professional-year-programs/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/professional-year-programs/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/professional-year-programs/sidebar.webp',
                    'section4' => 'assets/imgs/study/professional-year-programs/section4.webp',
                    'final_bg' => 'assets/imgs/study/professional-year-programs/final-bg.webp',
                ],
            ],
            'admission' => [
                'label' => 'Admission',
                'hero' => [
                    'tagline' => 'Admission support made simpler',
                    'heading' => 'Apply to Australian institutions with structured guidance',
                    'subheading' => 'From course shortlisting to offer letter coordination, Visawizer helps students approach admissions with confidence.',
                    'content' => 'Admission is the foundation of your study journey. A strong application begins with choosing the right course, preparing accurate documents, and understanding what the institution expects.',
                    'cta' => 'Start Admission Support',
                ],
                'section2' => [
                    'heading' => 'Apply where your profile fits best',
                    'content' => 'We help you identify programs and institutions that match your academic record, goals, budget, and eligibility.',
                ],
                'section3' => [
                    'heading' => 'Keep your admission file organised',
                    'points' => [
                        'Academic transcripts',
                        'Passport details',
                        'English language documents',
                        'Resume, where required',
                        'Statement of purpose, where applicable',
                        'Work experience documents, where relevant',
                    ],
                ],
                'section4' => [
                    'heading' => 'Guided support through the application process',
                    'content' => 'We help students understand application steps, submission requirements, offer letter conditions, and important timelines.',
                ],
                'section5' => [
                    'heading' => 'Understand your offer before you accept',
                    'content' => 'An offer letter should be reviewed carefully for course details, fees, conditions, location, intake, and next steps.',
                ],
                'final' => [
                    'heading' => 'Apply with clarity and confidence',
                    'cta' => 'Get Admission Guidance',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/admission/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/admission/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/admission/sidebar.webp',
                    'section4' => 'assets/imgs/study/admission/section4.webp',
                    'final_bg' => 'assets/imgs/study/admission/final-bg.webp',
                ],
            ],
            'popular-courses-australia' => [
                'label' => 'Popular Courses Australia',
                'hero' => [
                    'tagline' => 'Explore your course options',
                    'heading' => 'Popular courses in Australia for international students',
                    'subheading' => 'Understand course categories, career relevance, and study options before making your education decision.',
                    'content' => 'Australia offers a wide range of courses across business, technology, healthcare, engineering, hospitality, education, trades, and more. The best course for you depends on your profile, interest, budget, and future plan.',
                    'cta' => 'Find Suitable Courses',
                ],
                'section2' => [
                    'heading' => 'Course options across multiple fields',
                    'points' => [
                        'Business and management',
                        'Information technology',
                        'Engineering',
                        'Healthcare and community services',
                        'Hospitality and tourism',
                        'Education and early childhood',
                        'Trades and vocational programs',
                    ],
                ],
                'section3' => [
                    'heading' => 'Popular does not always mean suitable',
                    'content' => 'A course should be selected based on your background, capability, genuine interest, career goals, and future direction.',
                ],
                'section4' => [
                    'heading' => 'Course choice and location go together',
                    'content' => 'Your study city, institution type, living cost, campus environment, and support system can all influence your experience.',
                ],
                'section5' => [
                    'heading' => 'Think beyond admission',
                    'content' => 'Before choosing a course, students should understand how it may connect to employment, further study, and future visa planning.',
                ],
                'final' => [
                    'heading' => 'Let us help you shortlist the right course',
                    'cta' => 'Book Course Counselling',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/popular-courses-australia/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/popular-courses-australia/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/popular-courses-australia/sidebar.webp',
                    'section4' => 'assets/imgs/study/popular-courses-australia/section4.webp',
                    'final_bg' => 'assets/imgs/study/popular-courses-australia/final-bg.webp',
                ],
            ],
            'change-of-course' => [
                'label' => 'Change Of Course',
                'hero' => [
                    'tagline' => 'Review before you change',
                    'heading' => 'Planning to change your course in Australia?',
                    'subheading' => 'Understand the academic, visa, financial, and future pathway implications before making a course change.',
                    'content' => 'Changing a course can be the right decision when your current study no longer fits your goals. However, it should be done carefully because it may affect your study plan, visa conditions, and future options.',
                    'cta' => 'Discuss Course Change',
                ],
                'section2' => [
                    'heading' => 'Why students consider changing course',
                    'points' => [
                        'Course does not match expectations',
                        'Career direction has changed',
                        'Academic difficulty',
                        'Better program opportunity',
                        'Financial or location considerations',
                        'Future planning concerns',
                    ],
                ],
                'section3' => [
                    'heading' => 'Do not change without reviewing the impact',
                    'content' => 'Before making a decision, students should review visa conditions, academic progression, institution rules, refund policies, and long-term study plans.',
                ],
                'section4' => [
                    'heading' => 'We help you review your options carefully',
                    'content' => 'Visawizer helps students understand possible consequences and identify suitable alternatives before moving forward.',
                ],
                'section4_variant' => 'review_split',
                'section5' => [
                    'heading' => 'Keep the transition structured',
                    'content' => 'A course change may involve admission documents, provider communication, release processes, updated enrolment details, and visa-related review.',
                ],
                'final' => [
                    'heading' => 'Make a course change with clarity',
                    'cta' => 'Book Course Change Review',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/change-of-course/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/change-of-course/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/change-of-course/sidebar.webp',
                    'section4' => 'assets/imgs/study/change-of-course/section4.webp',
                    'final_bg' => 'assets/imgs/study/change-of-course/final-bg.webp',
                ],
            ],
            'change-of-college-university' => [
                'label' => 'Change Of College / University',
                'hero' => [
                    'tagline' => 'Change provider carefully',
                    'heading' => 'Thinking of changing your college or university?',
                    'subheading' => 'Get guidance before transferring to another education provider in Australia.',
                    'content' => 'Changing your education provider can be a major decision. It may affect your academic progress, fees, location, study plan, and visa compliance. Proper advice before transfer can reduce confusion and mistakes.',
                    'cta' => 'Review My Transfer Option',
                ],
                'section2' => [
                    'heading' => 'Common reasons for changing institution',
                    'points' => [
                        'Better course availability',
                        'Location preference',
                        'Fee or budget concerns',
                        'Campus experience',
                        'Academic support needs',
                        'Career alignment',
                    ],
                ],
                'section3' => [
                    'heading' => 'Understand your obligations before moving',
                    'content' => 'Students should review provider rules, release requirements, enrolment status, and any possible visa implications before changing institutions.',
                ],
                'section4' => [
                    'heading' => 'Choose a provider that fits your future',
                    'content' => 'We help students evaluate whether the new college or university is suitable for their academic, financial, and career goals.',
                ],
                'section5' => [
                    'heading' => 'Move with better planning',
                    'content' => 'Visawizer can guide you on document readiness, new admission steps, communication requirements, and timing.',
                ],
                'final' => [
                    'heading' => 'Plan your institution change properly',
                    'cta' => 'Speak to Visawizer',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/change-of-college-university/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/change-of-college-university/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/change-of-college-university/sidebar.webp',
                    'section4' => 'assets/imgs/study/change-of-college-university/section4.webp',
                    'final_bg' => 'assets/imgs/study/change-of-college-university/final-bg.webp',
                ],
            ],
            'career-guidance' => [
                'label' => 'Career Guidance',
                'hero' => [
                    'tagline' => 'Study with direction',
                    'heading' => 'Career guidance for students planning Australia',
                    'subheading' => 'Choose your course and pathway with a better understanding of your strengths, goals, and future possibilities.',
                    'content' => 'Many students choose courses based only on trends or peer suggestions. Career guidance helps you make a more informed decision based on your interests, academic profile, skills, and long-term ambitions.',
                    'cta' => 'Get Career Guidance',
                ],
                'section2' => [
                    'heading' => 'Your course should connect to your future',
                    'content' => 'A strong study decision should support your professional direction. Career guidance helps reduce confusion and gives more purpose to your education investment.',
                ],
                'section3' => [
                    'heading' => 'We help map your background to possible fields',
                    'points' => [
                        'Academic performance',
                        'Skills and interests',
                        'Work experience',
                        'Preferred industry',
                        'Long-term goals',
                        'Study budget and location',
                    ],
                ],
                'section4' => [
                    'heading' => 'Choose a course with practical relevance',
                    'content' => 'We help students understand which course categories may better support their professional goals and future opportunities.',
                ],
                'section5' => [
                    'heading' => 'Plan your steps beyond admission',
                    'content' => 'Career guidance can include course planning, skill-building direction, internship awareness, graduate pathway planning, and future decision-making.',
                ],
                'final' => [
                    'heading' => 'Build a clearer study and career roadmap',
                    'cta' => 'Book Career Session',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/career-guidance/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/career-guidance/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/career-guidance/sidebar.webp',
                    'section4' => 'assets/imgs/study/career-guidance/section4.webp',
                    'final_bg' => 'assets/imgs/study/career-guidance/final-bg.webp',
                ],
            ],
            'oshc' => [
                'label' => 'OSHC',
                'aliases' => [
                    'overseas-student-health-cover',
                ],
                'hero' => [
                    'tagline' => 'Health cover for students',
                    'heading' => 'Overseas Student Health Cover assistance for Australia',
                    'subheading' => 'Get support in arranging OSHC aligned with your student visa and study requirements.',
                    'content' => 'Overseas Student Health Cover is an important requirement for international students in Australia. Visawizer’s current OSHC page also positions OSHC as a mandatory requirement before student visa approval.',
                    'cta' => 'Get OSHC Assistance',
                ],
                'section2' => [
                    'heading' => 'Health cover designed for international students',
                    'content' => 'OSHC helps international students access healthcare support while studying in Australia, subject to policy terms and coverage conditions.',
                ],
                'section3' => [
                    'heading' => 'OSHC is part of your study preparation',
                    'content' => 'Students should arrange health cover carefully because it connects to visa preparation, enrolment timelines, and stay in Australia.',
                ],
                'section4' => [
                    'heading' => 'Compare before you finalise',
                    'points' => [
                        'Policy period',
                        'Provider options',
                        'Coverage inclusions',
                        'Cost considerations',
                        'Visa and course duration alignment',
                    ],
                ],
                'section5' => [
                    'heading' => 'We help you arrange OSHC smoothly',
                    'content' => 'Visawizer can help students understand OSHC requirements, compare available options, and arrange cover suitable for their study timeline.',
                ],
                'final' => [
                    'heading' => 'Need OSHC for your student visa?',
                    'cta' => 'Speak to Our Team',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/oshc/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/oshc/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/oshc/sidebar.webp',
                    'section4' => 'assets/imgs/study/oshc/section4.webp',
                    'final_bg' => 'assets/imgs/study/oshc/final-bg.webp',
                ],
            ],
            'study-visas' => [
                'label' => 'Study Visas',
                'hero' => [
                    'tagline' => 'Student visa planning',
                    'heading' => 'Study visa guidance for international students',
                    'subheading' => 'Understand the visa options connected to studying, training, guardianship, and post-study planning in Australia.',
                    'content' => 'Australia’s studying and training visa category includes Student Visa 500, Student Guardian Visa 590, and Training Visa 407. The Australian High Commission in India also lists these as studying and training visas.',
                    'cta' => 'Explore Study Visa Options',
                ],
                'section2' => [
                    'heading' => 'Study-related visa support in one place',
                    'cards' => [
                        'Student Visa 500',
                        'Student Guardian Visa 590',
                        'Training Visa 407',
                        'Temporary Graduate Visa 485',
                        'Post-study work guidance',
                    ],
                ],
                'section3' => [
                    'heading' => 'Every study situation needs a different pathway',
                    'content' => 'A student applying for a degree, a guardian accompanying a minor, a trainee attending workplace training, and a graduate planning next steps may all need different visa guidance.',
                ],
                'section4' => [
                    'heading' => 'Prepare a complete and consistent application',
                    'points' => [
                        'Course or training purpose',
                        'Genuine study intention',
                        'Financial readiness',
                        'Health cover',
                        'Identity documents',
                        'Academic records',
                        'Supporting evidence',
                    ],
                ],
                'section5' => [
                    'heading' => 'From eligibility review to document guidance',
                    'content' => 'We help you understand the relevant visa pathway, identify requirements, prepare documents, and plan your next steps clearly.',
                ],
                'final' => [
                    'heading' => 'Understand your study visa pathway',
                    'cta' => 'Book Visa Consultation',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/study-visas/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/study-visas/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/study-visas/sidebar.webp',
                    'section4' => 'assets/imgs/study/study-visas/section4.webp',
                    'final_bg' => 'assets/imgs/study/study-visas/final-bg.webp',
                ],
            ],
            'student-visa-subclass-500' => [
                'label' => 'Student Visa Subclass 500',
                'aliases' => [
                    'student-visa-500',
                    'visa/student-visa-500',
                ],
                'hero' => [
                    'tagline' => 'Student Visa 500',
                    'heading' => 'Student Visa Subclass 500 guidance for Australia',
                    'subheading' => 'Apply for your Australian study journey with structured guidance on eligibility, documentation, and application readiness.',
                    'content' => 'The Student Visa Subclass 500 allows international students to participate in a course of study in Australia.',
                    'cta' => 'Start Student Visa Guidance',
                ],
                'section2' => [
                    'heading' => 'For students accepted into eligible Australian study programs',
                    'content' => 'This visa is generally relevant for international students who plan to study in Australia with an approved education provider and meet applicable visa requirements.',
                ],
                'section3' => [
                    'heading' => 'What students usually need to prepare',
                    'points' => [
                        'Confirmation of enrolment or course evidence',
                        'Identity documents',
                        'Academic documents',
                        'Financial evidence',
                        'Genuine study purpose',
                        'English language evidence, where required',
                        'OSHC',
                        'Health and character requirements',
                    ],
                ],
                'section4' => [
                    'heading' => 'Avoid weak or incomplete applications',
                    'content' => 'Student visa applications can become difficult when documents are inconsistent, financial evidence is unclear, course selection is not justified, or the study purpose is poorly explained.',
                ],
                'section5' => [
                    'heading' => 'We help you prepare with clarity',
                    'content' => 'Visawizer helps review your study plan, guide your documentation, explain requirements, and support you through the visa preparation process.',
                ],
                'final' => [
                    'heading' => 'Ready to apply for your student visa?',
                    'cta' => 'Book Student Visa Consultation',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/student-visa-subclass-500/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/student-visa-subclass-500/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/student-visa-subclass-500/sidebar.webp',
                    'section4' => 'assets/imgs/study/student-visa-subclass-500/section4.webp',
                    'final_bg' => 'assets/imgs/study/student-visa-subclass-500/final-bg.webp',
                ],
            ],
            'student-guardian-visa-subclass-590' => [
                'label' => 'Student Guardian Visa Subclass 590',
                'aliases' => [
                    'student-guardian-590',
                    'visa/student-guardian-590',
                ],
                'hero' => [
                    'tagline' => 'Student Guardian Visa 590',
                    'heading' => 'Guardian visa guidance for parents and eligible guardians',
                    'subheading' => 'Support a student visa holder in Australia with clear guidance on the Student Guardian Visa pathway.',
                    'content' => 'The Student Guardian Visa Subclass 590 allows eligible people to visit Australia for up to 5 years to support a child who holds a student visa.',
                    'cta' => 'Discuss Guardian Visa',
                ],
                'section2' => [
                    'heading' => 'For guardians supporting young students',
                    'content' => 'This visa may be relevant for a parent, custodian, or eligible relative who needs to provide care and support to a student visa holder in Australia.',
                ],
                'section3' => [
                    'heading' => 'The guardian’s role must be clearly understood',
                    'points' => [
                        'Relationship with student',
                        'Student’s age and care needs',
                        'Accommodation and welfare arrangements',
                        'Financial capacity',
                        'Intended stay period',
                        'Compliance with visa conditions',
                    ],
                ],
                'section4' => [
                    'heading' => 'Prepare evidence carefully',
                    'content' => 'Guardian visa applications should show why the guardian is needed, how the student will be supported, and how the guardian will meet requirements during the stay.',
                ],
                'section5' => [
                    'heading' => 'Guidance for families and guardians',
                    'content' => 'Visawizer helps families understand the process, prepare documents, and coordinate the guardian visa with the student’s study plan.',
                ],
                'final' => [
                    'heading' => 'Need to accompany a student in Australia?',
                    'cta' => 'Book Guardian Visa Consultation',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/student-guardian-visa-subclass-590/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/student-guardian-visa-subclass-590/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/student-guardian-visa-subclass-590/sidebar.webp',
                    'section4' => 'assets/imgs/study/student-guardian-visa-subclass-590/section4.webp',
                    'final_bg' => 'assets/imgs/study/student-guardian-visa-subclass-590/final-bg.webp',
                ],
            ],
            'training-visa-subclass-407' => [
                'label' => 'Training Visa Subclass 407',
                'aliases' => [
                    'training-407',
                    'visa/training-407',
                ],
                'hero' => [
                    'tagline' => 'Training Visa 407',
                    'heading' => 'Training Visa Subclass 407 guidance for occupational training',
                    'subheading' => 'Understand training visa requirements, sponsorship, nomination, and documentation before applying.',
                    'content' => 'The Training Visa Subclass 407 is for occupational training and professional development activities. From March 2026, Home Affairs states that 407 applicants must have an approved sponsor and nomination before they can apply.',
                    'cta' => 'Discuss Training Visa',
                ],
                'section2' => [
                    'heading' => 'For structured training, not general employment',
                    'content' => 'This visa is generally relevant where a person needs workplace-based training, professional development, or occupational training linked to specific requirements.',
                ],
                'section3' => [
                    'heading' => 'Understand the purpose of training',
                    'content' => 'Home Affairs identifies different occupational training types for Subclass 407, including training required for registration and training to improve skills in an eligible occupation.',
                ],
                'section4' => [
                    'heading' => 'Sponsorship must be planned before application',
                    'content' => 'Because sponsor and nomination approval are central to the pathway, applicants and sponsors need to prepare carefully before lodging the visa application.',
                ],
                'section5' => [
                    'heading' => 'Support for applicants and sponsors',
                    'content' => 'Visawizer helps review the training purpose, documentation needs, sponsor readiness, nomination considerations, and visa preparation steps.',
                ],
                'final' => [
                    'heading' => 'Planning occupational training in Australia?',
                    'cta' => 'Book Training Visa Review',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/training-visa-subclass-407/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/training-visa-subclass-407/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/training-visa-subclass-407/sidebar.webp',
                    'section4' => 'assets/imgs/study/training-visa-subclass-407/section4.webp',
                    'final_bg' => 'assets/imgs/study/training-visa-subclass-407/final-bg.webp',
                ],
            ],
            'temporary-graduate-visa-subclass-485' => [
                'label' => 'Temporary Graduate Visa Subclass 485',
                'aliases' => [
                    'temporary-graduate-485',
                    'visa/temporary-graduate-485',
                ],
                'hero' => [
                    'tagline' => 'Temporary Graduate Visa 485',
                    'heading' => 'Graduate visa guidance after studying in Australia',
                    'subheading' => 'Explore temporary graduate options after completing eligible Australian study.',
                    'content' => 'The Temporary Graduate Visa Subclass 485 allows eligible international students to live, study and work in Australia temporarily after completing their studies.',
                    'cta' => 'Check Graduate Visa Options',
                ],
                'section2' => [
                    'heading' => 'For eligible graduates planning their next step',
                    'content' => 'This visa may be relevant for international students who have recently completed eligible Australian study and want to continue their journey through work experience, further study, or future planning.',
                ],
                'section3' => [
                    'heading' => 'Your study history matters',
                    'content' => 'Home Affairs notes that applicants must meet Australian study requirements, including completion of study in Australia over the required duration while holding a visa authorising study.',
                ],
                'section4' => [
                    'heading' => 'Understand which 485 stream may apply',
                    'content' => 'The 485 visa includes different streams, and the right stream depends on your qualification level, study history, and current eligibility rules.',
                ],
                'section5' => [
                    'heading' => 'Do not wait until the last moment',
                    'content' => 'Graduate visa planning should begin before your current visa becomes urgent. Documents, completion letters, test results, health checks, and eligibility evidence may all need time.',
                ],
                'final' => [
                    'heading' => 'Plan your post-study future with clarity',
                    'cta' => 'Book 485 Visa Consultation',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/temporary-graduate-visa-subclass-485/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/temporary-graduate-visa-subclass-485/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/temporary-graduate-visa-subclass-485/sidebar.webp',
                    'section4' => 'assets/imgs/study/temporary-graduate-visa-subclass-485/section4.webp',
                    'final_bg' => 'assets/imgs/study/temporary-graduate-visa-subclass-485/final-bg.webp',
                ],
            ],
            'post-study-work-visa-485' => [
                'label' => 'Post Study Work Visa 485',
                'aliases' => [
                    'post-study-work-485',
                    'visa/post-study-work-485',
                ],
                'hero' => [
                    'tagline' => 'Post-study work planning',
                    'heading' => 'Post Study Work Visa guidance for eligible graduates',
                    'subheading' => 'Understand your pathway after completing Australian study and prepare your next step with confidence.',
                    'content' => 'The post-higher education work stream of the Temporary Graduate Visa allows eligible graduates to live, work and study in Australia temporarily.',
                    'cta' => 'Explore Post-Study Work Options',
                ],
                'section2' => [
                    'heading' => 'Graduation is a transition point',
                    'content' => 'After completing your course, your next visa decision can shape your work experience, future study, and long-term migration planning. Early guidance helps reduce pressure.',
                ],
                'section3' => [
                    'heading' => 'Check your qualification and study history',
                    'content' => 'Eligibility can depend on qualification level, study completion, Australian study requirements, timing, and current Home Affairs rules.',
                ],
                'section4' => [
                    'heading' => 'Questions graduates often ask',
                    'points' => [
                        'Am I eligible after my course?',
                        'Which stream applies to me?',
                        'When should I apply?',
                        'What documents should I prepare?',
                        'Can I work after graduation?',
                        'What comes after the 485 visa?',
                    ],
                ],
                'section5' => [
                    'heading' => 'From course completion to next visa step',
                    'content' => 'Visawizer helps graduates review eligibility, understand documents, plan timing, and connect the 485 decision with longer-term career and migration goals.',
                ],
                'final' => [
                    'heading' => 'Ready to plan your post-study pathway?',
                    'cta' => 'Book Graduate Visa Review',
                ],
                'images' => [
                    'hero_bg' => 'assets/imgs/study/post-study-work-visa-485/hero-bg.webp',
                    'hero_band' => 'assets/imgs/study/post-study-work-visa-485/hero-band.webp',
                    'sidebar' => 'assets/imgs/study/post-study-work-visa-485/sidebar.webp',
                    'section4' => 'assets/imgs/study/post-study-work-visa-485/section4.webp',
                    'final_bg' => 'assets/imgs/study/post-study-work-visa-485/final-bg.webp',
                ],
            ],
        ];
    }

    public static function countries(): array
    {
        return [
            'Afghanistan',
            'Australia',
            'Bangladesh',
            'Bhutan',
            'Brazil',
            'Canada',
            'China',
            'Egypt',
            'France',
            'Germany',
            'Ghana',
            'Hong Kong',
            'India',
            'Indonesia',
            'Iran',
            'Iraq',
            'Ireland',
            'Italy',
            'Japan',
            'Jordan',
            'Kenya',
            'Malaysia',
            'Maldives',
            'Mauritius',
            'Myanmar',
            'Nepal',
            'Netherlands',
            'New Zealand',
            'Nigeria',
            'Oman',
            'Pakistan',
            'Philippines',
            'Qatar',
            'Saudi Arabia',
            'Singapore',
            'South Africa',
            'South Korea',
            'Spain',
            'Sri Lanka',
            'Thailand',
            'Turkey',
            'UAE',
            'Uganda',
            'United Kingdom',
            'United States',
            'Vietnam',
            'Zambia',
            'Zimbabwe',
        ];
    }
}
