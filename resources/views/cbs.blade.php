@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.become-volunteer-card, .donate-us-card {
    background: #0000006e;
    backdrop-filter: blur(0);
}
@media (min-width: 1400px) and (max-width: 1700px) {
    .hero-slide-3 .banner-thumb {
        right: -10%;
    }
}
</style>
	<section class="hero-slider-active-3 m-0">
		<div class="hero-slide-3 rounded-0" style="background-image: url(assets/img/bg/hero-bg-3.webp)">
			<div class="container">
				<div class="hero-content-3">
					<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.2s">
						<span>Where Business Meets Social Responsibility</span>
					</div>

					<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
						<h1 style="font-size: 43px;line-height: 43px;">Driving Positive Change Through Purpose-Driven Business</h1>
					</div>

					<div class="text" data-animation="animate__fadeInUp" data-delay="0.4s">
						<p>We help organizations integrate ethical practices, sustainability, and community impact into their core business strategies.</p>
					</div>

					<div class="services-3" data-animation="animate__fadeInUp" data-delay="0.5s">
						<div class="service">
							<i class="fa-solid fa-check"></i>
							<p>Ethical & Sustainable<br> Business Frameworks</p>
						</div>
						<div class="service">
							<i class="fa-solid fa-check"></i>
							<p>Research-Backed Social<br> Impact Solutions</p>
						</div>
					</div>

					<div data-animation="animate__fadeInUp" data-delay="0.6s">
						<div class="hero-content-1">
							<div class="join-us">
								<a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">
									Contact Us 
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-thumb"><img alt="thumb" data-animation="animate__fadeInUp" data-delay="0.2s" src="assets/images/cbs.webp"></div>
			<div class="shape-1"><img alt="shape" src="assets/img/shapes/shape-20.webp"></div>
			<div class="shape-2"><img alt="shape" src="assets/img/shapes/shape-21.webp"></div>
		</div>
	</section>

	<!-- services-section start -->
	<section class="services-section-3 p-t-100 p-t-xs-80">
		<div class="container">
			<div class="row m-b-50 m-b-xs-40">
				<div class="col-xl-12">
					<div class="section-top-9">
						<div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<span>Empowering organizations to drive meaningful societal change through research</span>
						</div>
						<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Connecting Business Excellence With Social Responsibility</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Research &<br> Policy<br> Insights</h4>
							<i class="fa-light fa-file-lines"></i>
						</div>
						<div class="service-content">
							<p>Providing evidence-based studies and policy recommendations that guide businesses toward ethical, socially responsible decisions.</p>
						</div>
						<div class="i-shape">
							<h1>01</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Sustainable<br> Business<br> Solutions</h4>
							<i class="fa-light fa-leaf"></i>
						</div>
						<div class="service-content">
							<p>Helping organizations adopt eco-friendly practices, responsible governance, and long-term sustainability frameworks.</p>
						</div>
						<div class="i-shape">
							<h1>02</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Corporate–Community<br> Partnerships</h4>
							<i class="fa-light fa-handshake"></i>
						</div>
						<div class="service-content">
							<p>Building impactful collaborations between companies and communities to address real social challenges effectively.</p>
						</div>
						<div class="i-shape">
							<h1>03</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Ethical<br> Leadership<br> Development</h4>
							<i class="fa-light fa-user-shield"></i>
						</div>
						<div class="service-content">
							<p>Shaping leaders who are committed to integrity, community well-being, and responsible business transformation.</p>
						</div>
						<div class="i-shape">
							<h1>04</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="why-us-section-4 p-t-120 p-b-100 p-t-md-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="row row-gap-5 align-items-center">
				<div class="col-xl-6">
					<div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="thumb-1">
							<img src="{{ asset('assets/images/cbs-1.webp') }}">
							
						</div>
						<div class="thumb-2"><img src="{{ asset('assets/images/cbs-2.webp') }}"></div>
						<div class="thumb-3">
							<div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/cbs-3.webp') }}"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="common-subtitle text-uppercase">
							<span>About Us</span>
						</div>
						<div class="common-title text-start">
							<h2>Trusted Partner for Corporate Responsibility</h2>
						</div>
						<div class="text">
							<p>At <span class="green">Ethics<span class="golden">4</span>Work</span>, we guide organizations in building integrity-driven cultures. We provide expert consultation, compliance training, and actionable ethical frameworks to foster accountability, transparency, and responsible workplace practices across industries.</p>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Ethics & Compliance Experts</p>
								</div>
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Proven Track Record</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Certified & Accredited Programs</p>
								</div>
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Tailored Corporate Solutions</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="donate-to-us-section" style="background-image: url(assets/images/cbsbg.webp)">
		<div class="container">
			<div class="donate-to-us-layout">
				<div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
					<div class="card-icon">
						<i class="fa-light fa-users-medical"></i>
					</div>
					<h2>Driving Social Change Through Business Innovation</h2>
					<p>We support companies in developing strategies that balance growth with positive societal impact. Join us in creating business models that uplift communities and protect the planet.</p>
				</div>
				<div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="card-icon">
						<i class="fa-solid fa-hands-holding-circle"></i>
					</div>
					<h2>Collaborate With Us for Impactful Initiatives</h2>
					<p>Partner with our research experts, CSR teams, and community leaders to design programs that create measurable change and long-term transformation.</p>
				</div>
				<div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="assets/img/shapes/shape-44.webp"></div>
				<div class="icon-shape-2"></div>
			</div>
		</div>
	</section>

	<section class="why-us-section-5 p-t-120 p-b-60 p-t-md-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="row row-gap-5 align-items-center">
				<div class="col-xl-6">
					<div class="why-us-content-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="common-subtitle text-uppercase">
							<span>Why Choose Us</span>
						</div>
						<div class="common-title text-start">
							<h2>We combine business expertise with deep social understanding.</h2>
						</div>
						<div class="text">
							<p>We help organizations create responsible, sustainable, and ethical impact by integrating research, leadership development, and community engagement.</p>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Evidence-Based Research</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>High-Impact Social Projects</p>
								</div>
							</div>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Sustainable Business Practices</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service" style="    margin-left: -9px;">
									<i class="fa-solid fa-check"></i>
									<p>Community Development Projects</p>
								</div>
							</div>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Ethical Leadership Growth</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="thumb left" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<img alt="thumb-2" src="assets/images/cbsd.webp" style="width: 540px;">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection 