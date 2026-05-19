<?php

namespace App\Support;

class TestimonialData
{
    /**
     * Visawizer client testimonials (static).
     */
    public static function defaults(): array
    {
        return [
            [
                'name' => 'Gurpreet Baath',
                'designation' => 'Google Review · 2025-08-27',
                'testimonial' => 'I had an excellent experience with Visawizer Education in Melbourne. They guided me through the entire visa process with professionalism and patience. Everything was explained clearly, and I felt supported at every step. Highly recommend their services!',
                'image' => 'assets/images/testimonial1.webp',
                'rating' => 5.0,
            ],
            [
                'name' => 'Monish Kumar',
                'designation' => 'Google Review · 2025-08-26',
                'testimonial' => "I had an amazing experience working with Visawizer for my wife's visa application. Although having previous history of rejections Mr. Ankur assured us the partner will be a success since it was applied with a lot of care and taking small details into consideration. I am really thankful to Ankur for the endless support for the success and my lovely wife will be joining me soon from Fiji. A 100% recommended for anyone trying for visa no matter how complicated it is Visawizer will always find a way towards success. Thank you.",
                'image' => 'assets/images/testimonial2.webp',
                'rating' => 5.0,
            ],
            [
                'name' => 'Suneharadika Naidu',
                'designation' => 'Google Review · 2025-08-26',
                'testimonial' => "I want to express my heartfelt gratitude to Mr. Ankur of Visawizer for his support and guidance throughout my visa process. Mr. Ankur is incredibly knowledgeable and responsive. I've had few rejections in the past and thought it might affect my partner visa but thankfully my visa was granted within 7 months all thanks to Mr. Ankur. He takes time to clearly explain every step, answered all my questions promptly, and made sure I understood my options. Thanks to their guidance and expertise, my application was successful. I highly recommend Visawizer Education and Migration Services to anyone looking for a trustworthy and professional immigration agent. They truly care about their clients and go above and beyond to help. Thank you again for everything.",
                'image' => 'assets/images/testimonial3.webp',
                'rating' => 5.0,
            ],
            [
                'name' => 'Lovena Rawoo',
                'designation' => 'Google Review · 2025-08-11',
                'testimonial' => "Thank you Ankur! You're the best! I highly recommend reaching out to him for visa assistance!! Your help and Himanshu's support made my visa application process smooth and easy.",
                'image' => 'assets/images/testimonial1.webp',
                'rating' => 5.0,
            ],
        ];
    }

    public static function featured(int $limit = 3): array
    {
        return array_slice(self::all(), 0, $limit);
    }

    public static function all(): array
    {
        return self::defaults();
    }
}
