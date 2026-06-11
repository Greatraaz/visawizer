@php
    $title = 'Document Checklist — ' . $visa->name . ' (Subclass ' . $visa->code . ')';
@endphp
@extends('layouts.frontend')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/checklist.css') }}">
@endpush

@section('content')
<div class="checklist-page">
    <section class="cl-hero">
        <div class="container">
            <div class="cl-eyebrow justify-content-center">Subclass {{ $visa->code }}</div>
            <h1>{{ $visa->name }}</h1>
            <p>Tell us about your situation and we'll build a personalised document checklist for your application.</p>
        </div>
    </section>

    <section class="cl-main">
        <div class="container" style="max-width: 760px;">
            <a href="{{ route('checklist.index') }}" class="cl-back-link">
                <i class="fa-solid fa-arrow-left"></i> All visa types
            </a>

            <div class="cl-step-badge">Step 1 of 2 — Your details</div>

            <div class="cl-disclaimer" role="alert">
                <strong>Important:</strong> This tool provides general guidance only. Always check the
                <a href="https://immi.homeaffairs.gov.au" target="_blank" rel="noopener">official IMMI website</a>
                before lodging your application. Documents required may change; this checklist was last reviewed in November 2025.
            </div>

            <form action="{{ route('checklist.generate', $visa->slug) }}" method="POST" id="wizardForm">
                @csrf

                <div class="cl-panel">
                    <h2 class="cl-panel-title">Personal details</h2>

                    <div class="mb-4">
                        <label for="passport_country_code" class="form-label">
                            Country of passport <span class="text-danger">*</span>
                        </label>
                        <select name="passport_country_code" id="passport_country_code"
                                class="form-select @error('passport_country_code') is-invalid @enderror" required>
                            <option value="">— Select country —</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->code }}"
                                        data-english="{{ $country->english_exempt ? 'yes' : 'no' }}"
                                        data-oshc="{{ $country->oshc_exempt ? 'yes' : 'no' }}"
                                        {{ old('passport_country_code') === $country->code ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('passport_country_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="country-flags" class="mt-2 small text-muted" style="display:none"></div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">
                            Student category <span class="text-danger">*</span>
                        </label>
                        @php
                        $categories = [
                            'standard'    => 'All other students (most common)',
                            'dfat'        => 'DFAT sponsored student (Department of Foreign Affairs and Trade)',
                            'defence'     => 'Department of Defence sponsored student',
                            'exchange'    => 'Secondary exchange student',
                            'phd_marking' => 'Requesting a further visa for PhD thesis marking only',
                        ];
                        @endphp
                        @foreach ($categories as $val => $label)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="student_category"
                                       id="cat_{{ $val }}" value="{{ $val }}"
                                       {{ old('student_category', 'standard') === $val ? 'checked' : '' }} required>
                                <label class="form-check-label" for="cat_{{ $val }}">{{ $label }}</label>
                            </div>
                        @endforeach
                        @error('student_category')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-0">
                        <label class="form-label">
                            Are you under 18 years old? <span class="text-danger">*</span>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="under_18" id="u18_no" value="no"
                                   {{ old('under_18', 'no') === 'no' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="u18_no">No</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="under_18" id="u18_yes" value="yes"
                                   {{ old('under_18') === 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="u18_yes">Yes</label>
                        </div>
                    </div>
                </div>

                <div class="cl-panel">
                    <h2 class="cl-panel-title">Study information</h2>

                    <div class="mb-4">
                        <label for="course_type" class="form-label">
                            Principal course type <span class="text-danger">*</span>
                        </label>
                        <select name="course_type" id="course_type"
                                class="form-select @error('course_type') is-invalid @enderror" required>
                            <option value="">— Select course type —</option>
                            <option value="higher_ed"          {{ old('course_type') === 'higher_ed'           ? 'selected' : '' }}>Higher education (Bachelor, Graduate Diploma, Certificate IV+)</option>
                            <option value="phd_research"       {{ old('course_type') === 'phd_research'        ? 'selected' : '' }}>Postgraduate research (PhD / Masters by Research)</option>
                            <option value="elicos"             {{ old('course_type') === 'elicos'              ? 'selected' : '' }}>English Language Intensive Course (ELICOS)</option>
                            <option value="school"             {{ old('course_type') === 'school'              ? 'selected' : '' }}>Registered school course (primary or secondary)</option>
                            <option value="non_english_medium" {{ old('course_type') === 'non_english_medium'  ? 'selected' : '' }}>Course delivered in a language other than English</option>
                            <option value="vet"                {{ old('course_type') === 'vet'                 ? 'selected' : '' }}>Vocational Education and Training (VET / TAFE)</option>
                            <option value="other"              {{ old('course_type') === 'other'               ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('course_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">
                            Do you have accompanying dependants (spouse / partner / children)?
                            <span class="text-danger">*</span>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="has_dependants" id="dep_no"
                                   value="no" {{ old('has_dependants', 'no') === 'no' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="dep_no">No</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="has_dependants" id="dep_yes"
                                   value="yes" {{ old('has_dependants') === 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="dep_yes">Yes</label>
                        </div>
                    </div>

                    <div class="mb-0">
                        <label class="form-label">
                            Are you using a registered migration agent? <span class="text-danger">*</span>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="has_migration_agent" id="agent_no"
                                   value="no" {{ old('has_migration_agent', 'no') === 'no' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="agent_no">No</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="has_migration_agent" id="agent_yes"
                                   value="yes" {{ old('has_migration_agent') === 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="agent_yes">Yes</label>
                        </div>
                    </div>
                </div>

                <div class="cl-panel">
                    <h2 class="cl-panel-title">Save &amp; share (optional)</h2>
                    <p class="text-muted small mb-3">Enter your details to receive a link to your checklist, or leave blank to get a shareable URL after generation.</p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="applicant_name" class="form-label small">Your name</label>
                            <input type="text" name="applicant_name" id="applicant_name"
                                   class="form-control"
                                   placeholder="e.g. Rahul Sharma"
                                   value="{{ old('applicant_name') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label small">Email address</label>
                            <input type="email" name="email" id="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="you@example.com"
                                   value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="cl-actions">
                    <a href="{{ route('checklist.index') }}" class="cl-btn cl-btn-outline">← Back</a>
                    <button type="submit" class="cl-btn cl-btn-primary">
                        Generate my checklist <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

@push('scripts')
<script>
document.getElementById('passport_country_code').addEventListener('change', function () {
    const opt   = this.options[this.selectedIndex];
    const flags = document.getElementById('country-flags');
    const notes = [];
    if (opt.dataset.english === 'yes') notes.push('✓ English language test may not be required for your country.');
    if (opt.dataset.oshc   === 'yes') notes.push('✓ OSHC health cover may not be required — please verify at PrivateHealth.gov.au.');
    if (notes.length) {
        flags.innerHTML = notes.join('<br>');
        flags.style.display = 'block';
    } else {
        flags.style.display = 'none';
    }
});
</script>
@endpush
@endsection
