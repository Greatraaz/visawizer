@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

    <section class="services-section p-t-100 p-b-120">
        <div class="container">
            <div class="row justify-content-center text-center m-b-50 m-b-xs-40">
                <div class="col-xl-8">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <span>Case Studies</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                        <h2>Our Detailed Case Studies</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                @foreach ($caseStudy as $node)
                <div class="col-xl-4 m-b-30">
                    <div class="camping-card">
                        <div class="thumb">
                            <a href='{{ url('case-study/'.$node->slug) }}'><img alt="{{ $node->slug }}" src="{{ asset($node->image) }}"></a>
                        </div>
                        <div class="content">
                            <div class="content-top">
                                <div class="title">
                                    <h3><a href='{{ url('case-study/'.$node->slug) }}'>{{ $node->title }}</a></h3>
                                </div>
                                <div class="text">
                                    <p>{{ $node->industry }}</p>
                                </div>
                            </div>
                            <div class="donation-wrap">
                                <div class="d-bottom">
                                    <a class='e-primary-btn has-icon d-btn' href='{{ url('case-study/'.$node->slug) }}'>Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection 