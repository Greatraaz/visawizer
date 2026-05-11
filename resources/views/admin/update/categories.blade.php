<label class="form-label">Image</label>
<div class="main-product-image">
    <img src="{{ asset($category->image) }}" class="rounded-3" width="100">
</div>
<form class="edit-form mt-4" action="{{ url('admin/update-category') }}" method="POST" enctype="multipart/form-data" return_url="{{ url('admin/categories') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $category->id }}">
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label" >Parent Category *</label>
            <select class="form-control" name="parentId">
            <option value="0" @selected($category->parentId == 0)> -- Select -- </option>
            @foreach($categories as $node)
                <option value="{{ $node['id'] }}" @selected($category->parentId == $node['id'])>
                    {{ $node['category'] }}
                </option>
            @endforeach
        </select>

        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Category Name *</label>
            <input type="text" class="form-control" name="category" placeholder="Enter category name" value="{{ $category->category }}">
            <div class="category error"></div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Category Image </label>
            <input type="file" class="form-control image-file" name="image">
            <div class="image error"></div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($category->status == 1)>Active</option>
                <option value="0" @selected($category->status == 0)>Non Active</option>
            </select>
        </div>                                          
        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Update</button>
                <div class="message error"></div>
            </div>
        </div>
    </div>
</form>
