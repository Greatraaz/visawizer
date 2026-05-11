@if($facilitator->image)
<div class="d-flex gap-5">
    <div>
        <label class="form-label"> Image</label>
        <div class="main-product-image">
            <img src="{{ asset($facilitator->image) }}" class="rounded-3" width="100" height="100">
        </div>
    </div>
</div>
@endif

<form class="edit-form mt-4" action="{{ url('admin/update-facilitator') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $facilitator->id }}">
    
    <div class="row">

        <div class="mb-3 col-md-4">
            <label class="form-label">Name *</label>
            <input type="text" class="form-control" 
                   name="name" 
                   placeholder="Enter client name" 
                   value="{{ $facilitator->name }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Designation *</label>
            <input type="text" class="form-control" 
                   name="designation" 
                   placeholder="Enter designation / role" 
                   value="{{ $facilitator->designation }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Image</label>
            <input type="file" class="form-control image-file" name="image">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">About Facilitator *</label>
            <textarea class="ckeditor" name="about" placeholder="About Facilitator">{{ $facilitator->about }}</textarea>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($facilitator->status == 1)>Active</option>
                <option value="0" @selected($facilitator->status == 0)>Inactive</option>
            </select>
        </div>

        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                    Submit
                </button>
            </div>
        </div>

    </div>
</form>

<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>