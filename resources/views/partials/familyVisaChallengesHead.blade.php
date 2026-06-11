{{-- Family visa challenges section header: heading (+ optional lead), no image. --}}
<div class="wvt-reality-head wvt-reality-head--family" data-aos="fade-up">
    @if (!empty($page['challenges']['heading']))
        <h2 id="{{ $headingId }}" class="wvt-heading m-b-0">{{ $page['challenges']['heading'] }}</h2>
    @endif
    @if (!empty($page['challenges']['content']))
        <p class="wvt-reality-lead">{{ $page['challenges']['content'] }}</p>
    @endif
</div>
