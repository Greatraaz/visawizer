@if($testimonial->image)
<div class="d-flex gap-5">
    <div>
        <label class="form-label"> Image</label>
        <div class="main-product-image">
            <img src="{{ asset($testimonial->image) }}" class="rounded-3" width="100" height="100">
        </div>
    </div>
</div>
@endif

<form class="edit-form mt-4" action="{{ url('admin/update-testimonial') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $testimonial->id }}">
    
    <div class="row">

        <div class="mb-3 col-md-4">
            <label class="form-label">Name *</label>
            <input type="text" class="form-control" 
                   name="name" 
                   placeholder="Enter client name" 
                   value="{{ $testimonial->name }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Designation *</label>
            <input type="text" class="form-control" 
                   name="designation" 
                   placeholder="Enter designation / role" 
                   value="{{ $testimonial->designation }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Image</label>
            <input type="file" class="form-control image-file" name="image">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Testimonial Message *</label>
            <textarea class="form-control" name="testimonial" style="height: 100px;" required>
                {{ $testimonial->testimonial }}
            </textarea>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($testimonial->status == 1)>Active</option>
                <option value="0" @selected($testimonial->status == 0)>Inactive</option>
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