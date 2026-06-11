@if($banner->image)
<div class="d-flex gap-5">
    <div>
        <label class="form-label">Current Image</label>
        <div class="main-product-image">
            <img src="{{ asset($banner->image) }}" class="rounded-3" width="100%" height="400">
        </div>
    </div>
</div>
@endif

<form class="edit-form mt-4" action="{{ url('admin/update-banner') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $banner->id }}">

    <div class="row">

        <div class="mb-3 col-md-6">
            <label class="form-label">Heading *</label>
            <input type="text" 
                   class="form-control" 
                   name="heading" 
                   value="{{ $banner->heading }}" 
                   required>
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Button Text *</label>
            <input type="text" 
                   class="form-control" 
                   name="button" 
                   value="{{ $banner->button }}" 
                   required>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Description *</label>
            <textarea class="form-control" name="description" style="height: 100px;" required>{{ $banner->description }}</textarea>
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Button Link *</label>
            <input type="text" 
                   class="form-control" 
                   name="link" 
                   value="{{ $banner->link }}" 
                   required>
        </div>

        <div class="mb-3 col-md-3">
            <label class="form-label">Display Order No *</label>
            <input type="number" 
                   class="form-control" 
                   name="orderNo" 
                   value="{{ $banner->orderNo }}" 
                   required>
        </div>

        <div class="mb-3 col-md-3">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($banner->status == 1)>Active</option>
                <option value="0" @selected($banner->status == 0)>Inactive</option>
            </select>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Image <small>(size: 1356*571)</small></label>
            <input type="file" class="form-control image-file" name="image">
            <small class="text-muted">Allowed: jpg, jpeg, png, webp | Max: 1MB</small>
        </div>

        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                    Update Banner
                </button>
            </div>
        </div>

    </div>
</form>
