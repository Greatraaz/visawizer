@php
    $title = 'Your Document Checklist — ' . $visa->name;
@endphp
@extends('layouts.frontend')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/checklist.css') }}">
@endpush

@section('content')
<div class="checklist-page">
    <section class="cl-hero">
        <div class="container">
            <div class="cl-eyebrow justify-content-center">Your Checklist</div>
            <h1>{{ $visa->name }}</h1>
            <p>
                Subclass {{ $visa->code }}
                @if (!empty($inputs['applicant_name']))
                    &mdash; {{ $inputs['applicant_name'] }}
                @endif
                &middot; {{ $countryName }} passport
            </p>
        </div>
    </section>

    <section class="cl-main">
        <div class="container" style="max-width: 760px;">
            @php
                $allItems   = collect($checklistGroups)->flatMap(fn($g) => $g['items']);
                $totalCount = $allItems->count();
                $reqCount   = $allItems->whereIn('requirement_type', ['required', 'always_required'])->count();
                $condCount  = $allItems->where('requirement_type', 'conditional')->count();
                $ticked     = $ticked ?? [];
            @endphp

            <div class="cl-stats">
                <div class="cl-stat cl-stat--total">
                    <div class="cl-stat-value">{{ $totalCount }}</div>
                    <div class="cl-stat-label">Total documents</div>
                </div>
                <div class="cl-stat cl-stat--required">
                    <div class="cl-stat-value">{{ $reqCount }}</div>
                    <div class="cl-stat-label">Required</div>
                </div>
                <div class="cl-stat cl-stat--conditional">
                    <div class="cl-stat-value">{{ $condCount }}</div>
                    <div class="cl-stat-label">Conditional</div>
                </div>
            </div>

            <div class="cl-progress-wrap">
                <div class="d-flex justify-content-between small text-muted mb-2">
                    <span>Documents gathered</span>
                    <span id="progress-label">{{ count($ticked) }} of {{ $totalCount }}</span>
                </div>
                <div class="cl-progress-bar">
                    <div class="cl-progress-bar-fill" id="progress-bar"
                         style="width: {{ $totalCount > 0 ? round(count($ticked) / $totalCount * 100) : 0 }}%"
                         role="progressbar"
                         aria-valuenow="{{ count($ticked) }}"
                         aria-valuemin="0"
                         aria-valuemax="{{ $totalCount }}">
                    </div>
                </div>
            </div>

            <div class="cl-share-box checklist-share">
                <span class="small fw-semibold"><i class="fa-solid fa-link me-1"></i> Saved checklist:</span>
                <input type="text" class="form-control form-control-sm"
                       value="{{ route('checklist.resume', $token) }}"
                       id="shareUrl" readonly style="max-width:340px; flex:1;">
                <button type="button" class="cl-btn cl-btn-outline py-2 px-3" style="min-height:auto;" onclick="copyUrl()">Copy</button>
            </div>

            <div class="cl-disclaimer">
                This tool provides guidance only. Confirm requirements at
                <a href="https://immi.homeaffairs.gov.au" target="_blank">immi.homeaffairs.gov.au</a>
                before lodging. Requirements may change.
            </div>

            @foreach ($checklistGroups as $catSlug => $group)
                <h3 class="cl-category-title">{{ $group['name'] }}</h3>

                @foreach ($group['items'] as $item)
                    @php
                        $isChecked = in_array($item['key'], $ticked);
                        $reqBadge  = match($item['requirement_type']) {
                            'required', 'always_required' => ['badge-required', 'Required'],
                            'conditional' => ['badge-conditional', 'Conditional'],
                            default       => ['badge-optional', 'Optional'],
                        };
                    @endphp

                    <div class="cl-doc-card checklist-card {{ $isChecked ? 'checked-item' : '' }}"
                         id="card-{{ $item['key'] }}">
                        <div class="d-flex align-items-start gap-3">
                            <div class="pt-1">
                                <input type="checkbox"
                                       class="form-check-input tick-checkbox"
                                       id="tick-{{ $item['key'] }}"
                                       data-key="{{ $item['key'] }}"
                                       {{ $isChecked ? 'checked' : '' }}
                                       style="width:1.2em;height:1.2em;cursor:pointer;">
                            </div>

                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-2 flex-wrap mb-1">
                                    <label for="tick-{{ $item['key'] }}"
                                           class="fw-semibold mb-0" style="cursor:pointer;">
                                        {{ $item['title'] }}
                                    </label>
                                    <span class="badge {{ $reqBadge[0] }} small">{{ $reqBadge[1] }}</span>
                                    @if ($item['official_form'])
                                        <span class="badge bg-light text-secondary border small">
                                            {{ $item['official_form'] }}
                                        </span>
                                    @endif
                                </div>

                                @if ($item['hint'])
                                    <p class="text-muted small mb-2">{{ $item['hint'] }}</p>
                                @endif

                                <a class="cl-guidance-toggle"
                                   data-bs-toggle="collapse"
                                   data-bs-target="#detail-{{ $item['key'] }}"
                                   href="{{ url()->current() }}"
                                   onclick="return false;"
                                   role="button"
                                   aria-expanded="false">
                                    View full guidance <i class="fa-solid fa-chevron-down ms-1"></i>
                                </a>
                                <div class="collapse mt-2" id="detail-{{ $item['key'] }}">
                                    <div class="text-muted small">
                                        {!! $item['description'] !!}
                                    </div>
                                    @if ($item['official_form_url'])
                                        <a href="{{ $item['official_form_url'] }}"
                                           target="_blank" rel="noopener"
                                           class="cl-btn cl-btn-outline py-2 px-3 mt-2" style="min-height:auto; font-size:0.88rem;">
                                            Download {{ $item['official_form'] }} <i class="fa-solid fa-download ms-1"></i>
                                        </a>
                                    @endif
                                    @if ($item['additional_notes'])
                                        <div class="cl-disclaimer mt-2 mb-0">
                                            {{ $item['additional_notes'] }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach

            <div class="cl-actions checklist-actions mt-4">
                <a href="{{ route('checklist.wizard', $visa->slug) }}" class="cl-btn cl-btn-outline">
                    <i class="fa-solid fa-rotate-left"></i> Start over
                </a>
                <button type="button" onclick="window.print()" class="cl-btn cl-btn-outline">
                    <i class="fa-solid fa-print"></i> Print
                </button>
                <button type="button" onclick="copyUrl()" class="cl-btn cl-btn-primary">
                    <i class="fa-solid fa-share-nodes"></i> Copy link
                </button>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
const TICK_URL    = "{{ route('checklist.tick', $token) }}";
const CSRF_TOKEN  = "{{ csrf_token() }}";
const totalDocs   = {{ $totalCount }};
let tickedCount   = {{ count($ticked) }};

document.querySelectorAll('.tick-checkbox').forEach(function (cb) {
    cb.addEventListener('change', function () {
        const key     = this.dataset.key;
        const checked = this.checked;
        const card    = document.getElementById('card-' + key);

        card.classList.toggle('checked-item', checked);
        tickedCount += checked ? 1 : -1;
        updateProgress();

        fetch(TICK_URL, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': CSRF_TOKEN,
                'Accept': 'application/json',
            },
            body: JSON.stringify({ key: key, checked: checked ? 1 : 0 }),
        }).catch(function () {
            cb.checked = !checked;
            card.classList.toggle('checked-item', !checked);
            tickedCount += checked ? -1 : 1;
            updateProgress();
        });
    });
});

function updateProgress() {
    const pct = totalDocs > 0 ? Math.round(tickedCount / totalDocs * 100) : 0;
    document.getElementById('progress-bar').style.width = pct + '%';
    document.getElementById('progress-bar').setAttribute('aria-valuenow', tickedCount);
    document.getElementById('progress-label').textContent = tickedCount + ' of ' + totalDocs;
}

function copyUrl() {
    const url = document.getElementById('shareUrl').value;
    navigator.clipboard.writeText(url).then(function () {
        alert('Link copied to clipboard!');
    });
}
</script>
@endpush
@endsection
