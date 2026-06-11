@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

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
                                <h3>What is Visawizer and for whom?</h3>
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