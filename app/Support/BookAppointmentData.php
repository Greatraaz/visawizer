<?php

namespace App\Support;

class BookAppointmentData
{
    public static function page(): array
    {
        return [
            'meta' => [
                'title' => 'Book Appointment with Registered Migration Agents | Visawizer',
                'description' => 'Book a face-to-face, online, or telephonic migration consultation with Visawizer and Registered Migration Agent Ankur Saini.',
                'keywords' => 'book appointment Visawizer, migration consultation, Ankur Saini, MARN 2117640, registered migration agent',
            ],
            'hero' => [
                'eyebrow' => 'Book Appointment',
                'heading' => 'Consult with Australia\'s Registered Migration Agents',
                'subheading' => 'Explore your Australian visa options with Visawizer Education and Migration services.',
                'content' => 'Book an appointment with our expert, Ankur Saini, a registered migration agent, to support a smoother immigration process.',
                'primaryCta' => 'Select Appointment',
                'secondaryCta' => 'Call 0451 951 561',
                'secondaryUrl' => 'tel:+61451951561',
            ],
            'agent' => [
                'name' => 'Ankur Saini',
                'designation' => 'Registered Migration Agent',
                'marn' => '2117640',
                'image' => 'assets/images/visawizer_logo.svg',
            ],
            'contact' => [
                ['icon' => 'fa-light fa-location-dot', 'label' => 'Office', 'value' => 'Level 7, 276 Flinders Street, Melbourne CBD VIC 3000'],
                ['icon' => 'fa-light fa-phone-volume', 'label' => 'Call or SMS', 'value' => '0451 951 561', 'url' => 'tel:+61451951561'],
                ['icon' => 'fa-light fa-envelope-open-text', 'label' => 'Email', 'value' => 'info@visawizer.com.au', 'url' => 'mailto:info@visawizer.com.au'],
            ],
            'appointments' => [
                [
                    'title' => 'Face to Face Migration Consultation',
                    'duration' => '30 minutes',
                    'price' => 'A$150.00',
                    'description' => 'Looking for expert migration advice? Book a face-to-face consultation with our experienced Registered Migration Agent, Ankur Saini (MARN 2117640), at Visawizer Education and Migration Services. Get personalized guidance tailored to your needs and make your migration journey smooth and stress-free. Whether you\'re navigating visa options or need help with your application, Ankur\'s expertise will ensure you have the support you need.',
                ],
                [
                    'title' => 'Online Migration Consultation',
                    'duration' => '30 minutes',
                    'price' => 'A$150.00',
                    'description' => 'Ready to start your journey to Australia? Book your online migration consultation with our expert, Ankur Saini (MARN 2117640), at Visawizer Education and Migration Services. Whether you need help with visas, migration pathways, or understanding the Australian immigration system, Ankur\'s experience and knowledge are here to guide you. Get personalized advice from a registered migration agent, all from the comfort of your home.',
                ],
                [
                    'title' => 'Telephonic Migration Consultation',
                    'duration' => '30 minutes',
                    'price' => 'A$150.00',
                    'description' => 'Looking for expert migration advice? Book a telephonic consultation with Registered Migration Agent, Ankur Saini (MARN 2117640), at Visawizer Education and Migration Services. Whether you\'re navigating visa options or need guidance on your migration journey, Ankur provides clear, professional support tailored to your needs.',
                ],
            ],
            'schedule' => [
                'selectedAppointment' => 'Face to Face Migration Consultation with Visawizer Education and Migration services',
                'duration' => '30 minutes',
                'price' => 'A$150.00',
                'month' => 'May 2026',
                'selectedDate' => 'Monday, May 18',
                'timezone' => 'Asia/Calcutta (GMT+05:30)',
                'weekdays' => ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                'calendar' => [
                    ['', '', '', '', '1', '2', '3'],
                    ['4', '5', '6', '7', '8', '9', '10'],
                    ['11', '12', '13', '14', '15', '16', '17'],
                    ['18', '19', '20', '21', '22', '23', '24'],
                    ['25', '26', '27', '28', '29', '30', '31'],
                ],
                'availableDates' => ['18', '19', '20', '22', '25', '26', '27', '29'],
                'times' => ['6:00 AM', '6:30 AM', '7:00 AM', '7:30 AM', '8:00 AM', '8:30 AM', '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM'],
            ],
            'steps' => [
                ['title' => 'Select Appointment', 'text' => 'Choose face-to-face, online, or telephonic migration consultation.'],
                ['title' => 'Date & Time', 'text' => 'Select an available appointment date and time.'],
                ['title' => 'Confirm Details', 'text' => 'Share your contact details and appointment notes.'],
            ],
            'highlights' => [
                'Registered Migration Agent Ankur Saini (MARN 2117640)',
                '30-minute focused migration consultation',
                'Face-to-face, online, and telephonic options',
                'Static appointment data ready for dynamic integration later',
            ],
        ];
    }
}
