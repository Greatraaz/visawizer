@if($resources->document)
<div class="d-flex gap-5">
    <div>
        <a href="{{ url($resources->document) }}" class="btn-sm btn-primary">View Attachment</a>
    </div>
</div>
@endif

<form class="edit-form mt-4" action="{{ url('admin/update-resources') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{ $resources->id }}">

    <div class="row">

        <div class="mb-3 col-md-12">
            <label class="form-label">Resources Title *</label>
            <input type="text" class="form-control" name="title" value="{{ $resources->title }}">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Document *</label>
            <input type="file" class="form-control" name="document">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Description *</label>
            <textarea class="form-control" style="height: 100px;" name="description">{{ $resources->description }}</textarea>
        </div>
        
        <div class="mb-3 col-md-6">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($resources->status == 1)>Active</option>
                <option value="0" @selected($resources->status == 0)>Inactive</option>
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