@extends('layouts.frontend')
@section('content') 
<style type="text/css">
@media (min-width: 1200px) and (max-width: 1399px) {
    .about-us-section-3 .adjusted-margin .adjusted-padding {
        padding: 60px 20px 60px;
    }
}
</style>
   @include('partials.breadcrumb')
<div style="background-color: #f8f7f0">

    <!-- why-us-section start -->
   <section class="why-us-section-6 p-t-100 p-t-xs-80" style="
        background-image: url(assets/img/bg/why-us-bg.webp),
          url(assets/img/bg/who-we-are-bg.webp);
      ">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side – Visuals & Experience -->
            <div class="col-xl-6">
                <div class="thumb px-lg-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="thumb-1">
                        <img src="{{ asset('assets/images/principles-image-1.webp') }}" alt="Team Collaboration"/>
                        <div class="s-shape">
                            <img src="assets/img/shapes/shape-14.webp" alt="decorative-shape"/>
                        </div>
                    </div>
                    <div class="thumb-2">
                        <img src="{{ asset('assets/images/principles-image-2.webp') }}" alt="Workshop Session"/>
                    </div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img src="{{ asset('assets/images/principles-image-3.webp') }}" alt="Corporate Training"/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side – Content -->
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="common-subtitle">
                        <span>Who We Are</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Trusted Partner for Ethical Leadership and Corporate Responsibility</h2>
                    </div>
                    <div class="text">
                        <p>
                            At <span class="green">Ethics<span class="golden">4</span>Work</span>, we guide organizations in building integrity-driven cultures. We provide expert consultation, compliance training, and actionable ethical frameworks to foster accountability, transparency, and responsible workplace practices across industries.
                        </p>
                    </div>

                    <!-- Key Strengths -->
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ethics & Compliance Experts</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Certified & Accredited Programs</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Proven Track Record</p>
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

    <!-- why-us-section end -->
</div>

<!-- about-us-section-3 start -->
<section class="about-us-section-3" style="
      background-image: url(assets/img/bg/why-us-bg.webp),
        url(assets/img/bg/about-us-bg.webp);
    ">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 adjusted-margin">
                <div class="about-us-content adjusted-padding" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="common-subtitle">
                        <span>Our Journey</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Milestones in Building Ethical Impact</h2>
                    </div>

                    <div class="c-tabs-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="c-tab-1" data-bs-toggle="tab" data-bs-target="#c-tab-1-pane" type="button" role="tab" aria-controls="c-tab-1-pane" aria-selected="true">
                                    2020
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="c-tab-2" data-bs-toggle="tab" data-bs-target="#c-tab-2-pane" type="button" role="tab" aria-controls="c-tab-2-pane" aria-selected="false">
                                    2021
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="c-tab-3" data-bs-toggle="tab" data-bs-target="#c-tab-3-pane" type="button" role="tab" aria-controls="c-tab-3-pane" aria-selected="false">
                                    2022
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="c-tab-4" data-bs-toggle="tab" data-bs-target="#c-tab-4-pane" type="button" role="tab" aria-controls="c-tab-4-pane" aria-selected="false">
                                    2023
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="c-tab-5" data-bs-toggle="tab" data-bs-target="#c-tab-5-pane" type="button" role="tab" aria-controls="c-tab-5-pane" aria-selected="false">
                                    2024
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <!-- 2020 -->
                            <div class="tab-pane fade show active" id="c-tab-1-pane" role="tabpanel" aria-labelledby="c-tab-1" tabindex="0">
                                <div class="tab-content">
                                    <div class="year"><h6>2020</h6></div>
                                    <div class="reward"><h5>Founded <span class="green">Ethics<span class="golden">4</span>Work</span></h5></div>
                                    <div class="text">
                                        <p>Our journey began with a vision to promote ethical leadership and integrity. Launched our first pilot programs focused on corporate governance and compliance across organizations.</p>
                                    </div>
                                    <div class="annual-donation-wrap">
                                        <a class='e-primary-btn has-icon' href="{{ url('services') }}">
                                            Explore Our Solutions
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- 2021 -->
                            <div class="tab-pane fade" id="c-tab-2-pane" role="tabpanel" aria-labelledby="c-tab-2" tabindex="0">
                                <div class="tab-content">
                                    <div class="year"><h6>2021</h6></div>
                                    <div class="reward"><h5>Expanded Our Programs</h5></div>
                                    <div class="text">
                                        <p>Introduced corporate training modules and ethics workshops, engaging over 50 companies globally and establishing our first impactful cohort.</p>
                                    </div>
                                    <div class="annual-donation-wrap">
                                        <a class='e-primary-btn has-icon' href="{{ url('services') }}">
                                            Explore Our Solutions
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- 2022 -->
                            <div class="tab-pane fade" id="c-tab-3-pane" role="tabpanel" aria-labelledby="c-tab-3" tabindex="0">
                                <div class="tab-content">
                                    <div class="year"><h6>2022</h6></div>
                                    <div class="reward"><h5>Launched Community Engagement</h5></div>
                                    <div class="text">
                                        <p>Partnered with NGOs and educational institutions to run awareness campaigns and community initiatives, fostering responsible practices beyond corporate settings.</p>
                                    </div>
                                    <div class="annual-donation-wrap">
                                        <a class='e-primary-btn has-icon' href="{{ url('services') }}">
                                            Explore Our Solutions
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- 2023 -->
                            <div class="tab-pane fade" id="c-tab-4-pane" role="tabpanel" aria-labelledby="c-tab-4" tabindex="0">
                                <div class="tab-content">
                                    <div class="year"><h6>2023</h6></div>
                                    <div class="reward"><h5>Recognized Globally</h5></div>
                                    <div class="text">
                                        <p>Received acknowledgment from international ethical boards for promoting transparency and compliance. Expanded global partnerships and influence in corporate responsibility.</p>
                                    </div>
                                    <div class="annual-donation-wrap">
                                        <a class='e-primary-btn has-icon' href="{{ url('services') }}">
                                            Explore Our Solutions
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- 2024 -->
                            <div class="tab-pane fade" id="c-tab-5-pane" role="tabpanel" aria-labelledby="c-tab-5" tabindex="0">
                                <div class="tab-content">
                                    <div class="year"><h6>2024</h6></div>
                                    <div class="reward"><h5>Scaling Global Impact</h5></div>
                                    <div class="text">
                                        <p>Expanding our initiatives worldwide, focusing on leadership training, corporate responsibility programs, and policies that embed ethical practices into organizational DNA.</p>
                                    </div>
                                    <div class="annual-donation-wrap">
                                        <a class='e-primary-btn has-icon' href="{{ url('services') }}">
                                            Explore Our Solutions
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                                        </a>
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

<section class="volunteer-section p-t-120 p-b-120 p-t-xs-80 p-b-xs-80" style="background-color: #f8f7f0">
        <div class="container">
            <div class="section-top-13 justify-content-center">
                <div class="text-center">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>Inspiring ethical thinking for better work cultures.</span>
                    </div>
                    <div class="common-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h2>Our Facilitators</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                @forelse($team as $node)    
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="volunteer-card-4">
                        <a href="javascript:void(0);" onclick="showTeam(this)">
                            <div class="thumb">
                                <img src="{{ asset($node->image) }}" alt="{{ $node->name }}" class="ratio298">
                            </div>
                            <div class="author-info">
                                <h5>{{ $node->name }}</h5>
                                <p>{{ $node->designation }}</p>
                            </div>
                            <div class="d-none showThis">{!! $node->about !!}</div>
                        </a>
                    </div>
                </div>
                @empty
                <p class="text-center mt-4 mb-4">No Record Found</p>
                @endforelse
            </div>
        </div>
    </section>

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
    <section class="p-t-60 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="details-layout-wrap align-items-center">
                        <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="details-title m-b-15">
                                <h3>What is Ethics4Work and for whom?</h3>
                            </div>

                            <ul class="achee">

                                <li>
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
                                        <h5 class="mb-0">Reduced Misconduct Risk</h5>
                                    </div>
                                    <p>
                                        Minimize ethical breaches and misconduct through structured policies, training, and reporting systems.
                                    </p>
                                </li>

                                <li>
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
                                        <h5 class="mb-0">Stronger Ethical Culture</h5>
                                    </div>
                                    <p>
                                        Create a values-based environment where transparency, accountability, and trust naturally grow.
                                    </p>
                                </li>

                                <li>
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
                                        <h5 class="mb-0">Regulatory & Compliance Confidence</h5>
                                    </div>
                                    <p>
                                        Gain confidence in meeting regulatory expectations through clear governance, documentation,
                                        and ethical decision-making systems.
                                    </p>
                                </li>

                                <li>
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <div class="icon mt-1"><i class="fa-solid fa-check"></i></div>
                                        <h5 class="mb-0">Improved Employability of Students</h5>
                                    </div>
                                    <p>
                                        Equip students with workplace ethics, professionalism, and integrity-based skills that enhance
                                        their readiness for real-world careers.
                                    </p>
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

@include('partials.blogs')

<div class="modal fade" id="teamModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title nameHere">Facilitator Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="teamModalBody">
        
      </div>
    </div>
  </div>
</div>

@endsection 
@push('script')
<script>
function showTeam(el) {
    let content = el.querySelector('.showThis').innerHTML;
    let name = el.querySelector('h5').innerHTML;
    document.getElementById('teamModalBody').innerHTML = content;
    document.querySelector('.nameHere').innerHTML = name;

    let modal = new bootstrap.Modal(document.getElementById('teamModal'));
    modal.show();
}
</script>
@endpush