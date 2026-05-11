@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
<style type="text/css">
.service-card .service-content p {
    width: 100%;
}
</style>
<section class="volunteer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle">
                    <span>Where We Do the Work</span>
                </div>
                <div class="common-title mb-0">
                    <h2>Diagnostic Quiz</h2>
                </div>
            </div>
            
            <div class="row row-gap-4">
                @forelse($category as $cat)
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <h4 class="text-white">{{ $cat->name }}</h4>
                        <div class="service-content">
                            <p>{{ $cat->description }}</p>
                        </div>
                        <a class="e-primary-btn has-icon active mt-3" href="{{ url('quiz/' . $cat->slug) }}">
                            <span class="btext">Play Quiz</span>
                            <span class="icon-wrap">
                                <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No quiz categories found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection 