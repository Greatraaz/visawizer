@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.become-volunteer-card, .donate-us-card {
    background: #0000006e;
    backdrop-filter: blur(0);
}

</style>
	<section class="hero-slider-active-3 m-0">
		<div class="hero-slide-3 rounded-0" style="background-image: url(assets/img/bg/hero-bg-3.webp)">
			<div class="container">
				<div class="hero-content-3">
					<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.2s">
						<span>Unlock Your Potential with Guided Clarity</span>
					</div>
					<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
						<h1 style="font-size: 43px;line-height: 43px;">Transformative Coaching for Professional Growth</h1>
					</div>
					<div class="text" data-animation="animate__fadeInUp" data-delay="0.4s">
						<p>Our coaching programs are designed to help individuals gain clarity, build confidence, and take purposeful action.</p>
					</div>
					<div class="services-3" data-animation="animate__fadeInUp" data-delay="0.5s">
						<div class="service">
							<i class="fa-solid fa-check"></i>
							<p>Sessions & Practical Exercises</p>
						</div>
						<div class="service">
							<i class="fa-solid fa-check"></i>
							<p>Learn from Experienced Leaders</p>
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
			<div class="banner-thumb"><img alt="thumb" data-animation="animate__fadeInUp" data-delay="0.2s" src="assets/images/cmpd.webp"></div>
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
							<span>START BUILDING FUTURE-READY PROFESSIONALS</span>
						</div>
						<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Empowering Individuals Through Coaching, Mentoring & Personality Development</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Personalized<br> Coaching<br> Programs</h4>
							<i class="fa-light fa-user-check"></i>
						</div>
						<div class="service-content">
							<p>Tailored one-on-one coaching designed to strengthen clarity, confidence, and goal-focused decision-making for personal and professional excellence.</p>
						</div>
						<div class="i-shape">
							<h1>01</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Professional<br> Mentoring<br> Guidance</h4>
							<i class="fa-light fa-user-tie"></i>
						</div>
						<div class="service-content">
							<p>Expert mentors provide real-world insights, continuous support, and structured guidance to help individuals grow faster and achieve long-term success.</p>
						</div>
						<div class="i-shape">
							<h1>02</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Personality<br> Development<br> Training</h4>
							<i class="fa-light fa-brain"></i>
						</div>
						<div class="service-content">
							<p>Enhance communication skills, emotional intelligence, and personal presence through interactive sessions that build a strong, influential personality.</p>
						</div>
						<div class="i-shape">
							<h1>03</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Leadership &<br> Behavioral<br> Skills</h4>
							<i class="fa-light fa-people-group"></i>
						</div>
						<div class="service-content">
							<p>Develop essential leadership qualities, team-building abilities, and behavioral competencies required to thrive in modern professional environments.</p>
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
							<img src="{{ asset('assets/images/cmpd-1.webp') }}">
							
						</div>
						<div class="thumb-2"><img src="{{ asset('assets/images/cmpd-2.webp') }}"></div>
						<div class="thumb-3">
							<div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/cmpd-3.webp') }}"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="common-subtitle text-uppercase">
							<span>About Us</span>
						</div>
						<div class="common-title text-start">
							<h2>Trusted Partner for Ethical Leadership</h2>
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

	<section class="donate-to-us-section" style="background-image: url(assets/images/cmpdbg.webp)">
		<div class="container">
			<div class="donate-to-us-layout">
				<div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
					<div class="card-icon">
						<i class="fa-light fa-users-medical"></i>
					</div>
					<h2>Unlock Your True Potential</h2>
					<p>Transform your skills, mindset, and confidence with expert-led programs. Take the first step towards personal and professional excellence.</p>
				</div>
				<div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="card-icon">
						<i class="fa-solid fa-hands-holding-circle"></i>
					</div>
					<h2>Enhance Your Growth With Expert Mentoring</h2>
					<p>Gain guidance from seasoned mentors who support your development, help you refine your strengths, and accelerate your career success.</p>
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
							<h2>We shape individuals with real, measurable transformation.</h2>
						</div>
						<div class="text">
							<p>We focus on results-driven learning experiences that strengthen personal growth, leadership abilities, and long-term professional success.</p>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Expert-Led Programs</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Personalized Learning Approach</p>
								</div>
							</div>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Communication Skills</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Leadership Development</p>
								</div>
							</div>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Confidence & Personality Growth</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="thumb left" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<img alt="thumb-2" src="assets/images/double.webp" style="width: 540px;">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection 