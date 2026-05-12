@php  
    $posts = [];
    $response = Http::get('https://visawizer.com.au/wp-json/wp/v2/posts?_embed&per_page=5');
    if ($response->successful()) {
        $posts = $response->json();
    }
@endphp

<style type="text/css">
.blog-card img.w-100 {
    height: 200px;
    object-fit: cover;
}
.blog-slider-active .content-top h3 {
    line-height: 22px !important;
    min-height: 70px;
}
</style>
<section class="latest-blog-section p-t-100 p-t-xs-80 p-b-60 p-b-xs-20 p-b-md-20 p-b-lg-20 p-b-xl-20">
    <div class="container">
        <div class="row justify-content-between align-items-center m-b-150 m-b-xl-120 m-b-lg-100 m-b-md-80 m-b-xs-80">
            <div class="col-md-6">
                <div class="latest-blog-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="common-subtitle">
                        <span>News & Blog</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Check Latest Blog Post</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-btn text-end">
                    <a class='e-primary-btn has-icon' href="{{ url('blogs') }}">Explore All Posts
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="blog-slider-active" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($posts as $post)
                                @php
                                    $title = $post['title']['rendered'];
                                    $slug = $post['slug'];
                                    $author = 'Visawizer';
                                    $date = \Carbon\Carbon::parse($post['date']);
                                    $day = $date->format('d');
                                    $month = $date->format('M');
                                    $year = $date->format('Y');
                                    $featuredImage = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/img/thumbs/thumb-6.webp');
                                @endphp
                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="thumb">
                                            <a href="{{ url('blog/' . $slug) }}"><img class="w-100" src="{{ $featuredImage }}" alt="{{ $slug }}"></a>
                                            <div class="category">
                                                <a href="javascript:void(0);">{{ $author }}</a>
                                            </div>
                                            <div class="event-date">
                                                <h2>{{ $day }}</h2>
                                                <h5>{{ $month }}</h5><span>{{ $year }}</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-top p-0 m-b-20">
                                                <div class="title">
                                                    <h3><a href="{{ url('blog/' . $slug) }}">{!! $title !!}</a></h3>
                                                </div>
                                                <div class="text">
                                                    <p>{{ Str::limit(strip_tags($post['excerpt']['rendered']), 80) }}</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <a class='e-primary-btn has-icon has-small' href="{{ url('blog/' . $slug) }}">Read More
                                                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
                                                <div class="social-share">
                                                    @php
                                                        $url = urlencode(url('blog/' . $slug));
                                                        $title = urlencode('Check out this blog!');
                                                    @endphp
                                                    <button class="total-shared"><i class="fa-solid fa-share-nodes"></i></button>
                                                    <div class="social-links">
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank" title="Share on Facebook">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                        <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}" target="_blank" title="Share on Twitter">
                                                            <i class="fab fa-x-twitter"></i>
                                                        </a>
                                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}" target="_blank" title="Share on LinkedIn">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                        <a href="https://api.whatsapp.com/send?text={{ $title }}%20{{ $url }}" target="_blank" title="Share on WhatsApp">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="blog-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-38.webp') }}"></div>
</section>