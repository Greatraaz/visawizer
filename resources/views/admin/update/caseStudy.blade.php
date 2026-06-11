@if($caseStudy->image)
<div class="d-flex gap-5">
    <div>
        <label class="form-label">Image</label>
        <div class="main-product-image">
            <img src="{{ asset($caseStudy->image) }}" class="rounded-3" width="100" height="100">
        </div>
    </div>
</div>
@endif

<form class="edit-form mt-4" action="{{ url('admin/update-case-study') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{ $caseStudy->id }}">

    <div class="row">

        <div class="mb-3 col-md-12">
            <label class="form-label">Case Study Title *</label>
            <input type="text" class="form-control" name="title" value="{{ $caseStudy->title }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Industry *</label>
            <input type="text" class="form-control" name="industry" value="{{ $caseStudy->industry }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Description *</label>
            <textarea class="form-control ckeditor" name="description">{{ $caseStudy->description }}</textarea>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Result</label>
            <textarea class="form-control ckeditor" name="result">{{ $caseStudy->result }}</textarea>
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($caseStudy->status == 1)>Active</option>
                <option value="0" @selected($caseStudy->status == 0)>Inactive</option>
            </select>
        </div>

        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                    Submit
                </button>
                <div class="message error"></div>
            </div>
        </div>

    </div>
</form>

<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>