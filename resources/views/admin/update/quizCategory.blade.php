<form class="edit-form mt-4" action="{{ url('admin/update-category') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $category->id }}">
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Category Name *</label>
            <input type="text" class="form-control" name="name" placeholder="Enter category name" value="{{ $category->name }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($category->status == 1)>Active</option>
                <option value="0" @selected($category->status == 0)>Non Active</option>
            </select>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Description *</label>
            <textarea name="description" placeholder="category Description" style="height: 100px;width: 100%;">{{ $category->description }}</textarea>
        </div>
                                 
        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                <div class="message error"></div>
            </div>
        </div>
    </div>
</form>