@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
<style type="text/css">
.icon i.fa-solid.fa-check {
    color: var(--theme-color-2);
    width: 20px;
    height: 20px;
    background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
    border-radius: 50%;
    padding: 3px;
}
.achee{
	list-style: none;margin-left: -28px;
}
.achee li{
	margin-bottom: 20px;
}
.details-layout-wrap {
    background: #f7f7f7;
    padding: 20px;
    border-radius: 20px;
}
</style>
	<section class="services-section-3 p-t-100 p-t-xs-80">
		<div class="container">
			<div class="row m-b-50 m-b-xs-40">
				<div class="col-xl-12">
					<div class="section-top-9">
						<div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<span>Our Core Tools</span>
						</div>
						<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Essential Tools to Strengthen Workplace Integrity</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Assessment Toolkit</h4>
							<i class="fa-light fa-clipboard-check"></i>
						</div>
						<div class="service-content">
							<p>A structured toolkit to evaluate current ethical practices, identify risks, and highlight improvement areas across all departments.</p>
						</div>
						<div class="i-shape">
							<h1>01</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Workplace Ethics Audit</h4>
							<i class="fa-light fa-file-search"></i>
						</div>
						<div class="service-content">
							<p>A comprehensive audit framework that examines communication, leadership behavior, and policy system to measure ethical maturity.</p>
						</div>
						<div class="i-shape">
							<h1>02</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Decision-Making Guide</h4>
							<i class="fa-light fa-project-diagram"></i>
						</div>
						<div class="service-content">
							<p>A step-by-step ethical reasoning model that helps employees make balanced, responsible choices in complex situations.</p>
						</div>
						<div class="i-shape">
							<h1>03</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Code of Conduct Builder</h4>
							<i class="fa-light fa-file-signature"></i>
						</div>
						<div class="service-content">
							<p>A customizable tool that helps organizations develop or refine their code of conduct, ensuring clarity, relevance, and industry alignment.</p>
						</div>
						<div class="i-shape">
							<h1>04</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="p-t-60 p-b-60">
	    <div class="container">
	        <div class="row">
	            <div class="col-xl-12">
	                <div class="details-layout-wrap align-items-center">
	                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
	                        <div class="details-title m-b-15">
	                            <h2>Our Frameworks</h2>
	                        </div>

	                        <ul class="achee">
	                        	<li>
	                        		<div class="d-flex gap-2 align-items-center mb-2">
				                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
				                        <h5 class="mb-0">Ethical Culture Development Framework</h5>
			                        </div>
			                        <p>A complete roadmap for building integrity-driven cultures—covering policy design, leadership alignment, employee engagement, and evaluation metrics.</p>
	                        	</li>
	                        	<li>
	                        		<div class="d-flex gap-2 align-items-center mb-2">
				                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
				                        <h5 class="mb-0">Compliance & Governance Framework</h5>
			                        </div>
			                        <p>A structured approach to implementing compliance programs that meet legal standards while fostering responsible workplace behavior.</p>
	                        	</li>
	                        	<li>
	                        		<div class="d-flex gap-2 align-items-center mb-2">
				                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
				                        <h5 class="mb-0">Ethical Leadership Model</h5>
			                        </div>
			                        <p>A leadership framework focusing on transparency, accountability, empathy, and alignment between values and actions.</p>
	                        	</li>
	                        	<li>
	                        		<div class="d-flex gap-2 align-items-center mb-2">
				                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
				                        <h5 class="mb-0">Integrity Management Cycle</h5>
			                        </div>
			                        <p>A continuous improvement cycle that helps organizations monitor, analyze, and strengthen ethical performance over time.</p>
	                        	</li>
	                        </ul>

	                    </div>
	                    <div>
	                    	<img src="{{ asset('assets/images/cbs-2.webp') }}" class="rounded-3">
	                    </div>

	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	@include('partials.testi')
    @include('partials.blogs')
@endsection 