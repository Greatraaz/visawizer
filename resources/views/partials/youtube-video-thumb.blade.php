<button
    type="button"
    class="vt-thumb{{ !empty($active) ? ' is-active' : '' }}"
    data-video-id="{{ $video['id'] }}"
    data-video-title="{{ e($video['title']) }}"
    data-video-date="{{ \Carbon\Carbon::parse($video['published_at'])->format('d M Y') }}"
>
    <span class="vt-thumb__image">
        <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" loading="lazy" decoding="async">
        <span class="vt-thumb__play" aria-hidden="true"><i class="fa-solid fa-circle-play"></i></span>
    </span>
    <span class="vt-thumb__title">{{ $video['title'] }}</span>
</button>
