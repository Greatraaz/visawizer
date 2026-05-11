@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.blog-card img.w-100 {
    height: 230px;
    object-fit: cover;
}
.blog-slider-active .content-top h3 {
    line-height: 22px !important;
    min-height: 70px;
}
.blog-card h3 {
    line-height: 22px !important;
    min-height: 70px;
}
</style>
@include('partials.breadcrumb')

    <section class="blog-section p-t-80 p-b-30">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                @foreach ($posts as $post)
                    @php
                        $title = $post['title']['rendered'];
                        $slug = $post['slug'];
                        $author = 'Ethics4work';
                        $date = \Carbon\Carbon::parse($post['date']);
                        $day = $date->format('d');
                        $month = $date->format('M');
                        $year = $date->format('Y');
                        $featuredImage = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/img/thumbs/thumb-6.webp');
                    @endphp
                    <div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
                        <div class="blog-card">
                            <div class="thumb">
                                <a href="{{ url('blog/' . $slug) }}"><img class="w-100" src="{{ $featuredImage }}" alt="{{ $slug }}"></a>
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
                <div class="col-lg-12">
                    <div class="blog-pagination">
                        <ul>
                            @if ($paginator->lastPage() > 1)
                                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                    <li>
                                        <a href="{{ $paginator->url($i) }}" class="{{ $paginator->currentPage() == $i ? 'active' : '' }}">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endfor
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 