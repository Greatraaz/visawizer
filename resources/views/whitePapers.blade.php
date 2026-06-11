@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
<style type="text/css">
.service-card-2 .service-top h4 {
    max-width: 215px;
}
.work-card {
    gap: 40px;
}
.work-card-content h3 {
    font-size: 30px;
    line-height: 30px;
    margin-bottom: 10px;
}
@media (min-width: 1200px) and (max-width: 1399px) {
    .work-card-content h3 {
        margin-bottom: 10px;
    }
}
.work-card-thumb img {
    max-width: 440px;
}
</style>
	<!-- latest-work-section start -->
	<section class="latest-work-section m-b-80 m-t-80">
	<div class="container">
		<div class="text-center m-b-60 m-b-xs-50">
			<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<span class="bg-p">White Papers</span>
			</div>
			<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
				<h3 class="fs-1">Expert Insights on Australian Education & Migration</h3>
			</div>
			<div class="b-line m-auto"></div>
		</div>

		<div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
			<div class="col-xl-12">
				@foreach ($whitePaper as $node)
				<div class="work-card">
					<div class="work-card-thumb">
						<img alt="{{ $node->slug }}" src="{{ asset($node->image) }}">
					</div>
					<div class="work-card-content">
						<h3>{{ $node->title }}</h3>
						<div class="w-line"></div>
						<p>{!! $node->description !!}</p>
					</div>
				</div>
				 @endforeach
			</div>
		</div>
	</div>
</section>

	@include('partials.blogs')
@endsection 