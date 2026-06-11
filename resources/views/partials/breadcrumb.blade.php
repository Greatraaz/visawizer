<style type="text/css">
.breadcrumb-title h2::before {
    content: "";
    height: 260px;
    width: 20px;
    background: var(--theme-color-2);
    position: absolute;
    right: -70px;
    top: -125px;
    transform: skewX(28deg);
}
@media (min-width: 992px) and (max-width: 1199px) {
  .breadcrumb-title h2::before {
    width: 25px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .breadcrumb-title h2::before {
    display: none;
  }
}
@media (max-width: 767px) {
  .breadcrumb-title h2::before {
    display: none;
  }
}
.breadcrumb-title h2 {
    position: relative;
    width: fit-content;
}
.breadcrumb-section {
    background-size: cover;
    background-position: center;
}
.breadcrumb-content {
    background: linear-gradient(to right, #000000b5, #ffffff00);
}
</style>
@php $r = rand(1,24); @endphp
<section class="breadcrumb-section" style="background-image: url('{{ asset("assets/images/banner/$r.webp") }}');">
    <div class="container-fluid">
        <div class="breadcrumb-content">
            <div class="breadcrumb-nav">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="javascript:void(0);">{{ Str::headline(last(Request::segments())) }}</a></li>
                </ul>
            </div>
            <div class="breadcrumb-title">
                <h2>{{ Str::headline(last(Request::segments())) }}</h2>
            </div>
        </div>
    </div>
</section>
