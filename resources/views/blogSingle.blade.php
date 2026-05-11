@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

    <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="details-layout-wrap">
                        <div class="details-content" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                            <div class="blog-card-5 m-b-40">
                                <div class="thumb">
                                    <img class="w-100" src="{{ $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/img/thumbs/thumb-148.webp') }}">
                                </div>
                                <div class="content">
                                    <div class="blog-info">
                                        <div class="date">
                                            <i class="fa-light fa-calendar-days"></i>
                                            <p>{{ \Carbon\Carbon::parse($post['date'])->format('d F, Y') }}</p>
                                        </div>
                                        <div class="comment">
                                            <i class="fa-light fa-tag"></i>
                                            @if(isset($post['_embedded']['wp:term'][0]))
                                                @foreach($post['_embedded']['wp:term'][0] as $category)
                                                    @if($category['taxonomy'] === 'category')
                                                        <p><a href="{{ url('blog/category/'.$category['slug']) }}">{{ $category['name'] }}</a></p>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="view">
                                            <i class="fa-light fa-user"></i>
                                            <p><span class="green">Visawizer</span></p>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h3>{!! $post['title']['rendered'] !!}</h3>
                                    </div>
                                    <div class="text">
                                        <p>{!! $post['content']['rendered'] !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-sidebar" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                            <div class="detail-sidebar-inner">
                                {{-- <div class="s-widget-wrap m-b-30">
                                    <div class="w-title">
                                        <h3>Blog Categories</h3>
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="detail-list">
                                        @php  
                                            $categories = [];
                                            $category = Http::get('https://visawizer.com.au/wp-json/wp/v2/categories');
                                            $categories = [];
                                            if ($category->successful()) {
                                                $categories = $category->json();
                                            }
                                        @endphp
                                        <ul>
                                            @foreach ($categories as $cat)
                                                @if (strtolower($cat['name']) !== 'uncategorized')
                                                <li><a href="{{ url('blog/category/' . $cat['slug']) }}">{!! $cat['name'] !!} <span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span></a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div> --}}
                                <div class="s-widget-wrap">
                                    <div class="w-title">
                                        <h3>Share With Everyone</h3>
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="socials">
                                        @php
                                            $url = urlencode(url()->current());
                                            $title = urlencode('Check out this blog!');
                                        @endphp
                                        <div class="social-links">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}"><i class="fab fa-x-twitter"></i></a>
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://api.whatsapp.com/send?text={{ $title }}%20{{ $url }}"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-widget-wrap mt-4">
                                    <div class="detail-contact text-center">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/contact-now.webp') }}" alt="shape">
                                        </div>

                                        <div class="icon-info-wrap">
                                            <div class="icon-wrap">
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/icons/icon-18.svg') }}" alt="icon">
                                                </div>
                                                <div class="bar-wrap">
                                                    <div class="bar-1"></div>
                                                    <div class="bar-2"></div>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3><a href="tel:+918744080405">{{ config('site.phone1') }}</a></h3>
                                                <p>Contact Us?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 