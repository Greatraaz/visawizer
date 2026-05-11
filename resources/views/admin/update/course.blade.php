@if($course->image)
<div class="d-flex gap-5">
    <div>
        <label class="form-label"> Image</label>
        <div class="main-product-image">
            <img src="{{ asset($course->image) }}" class="rounded-3" width="100" height="100">
        </div>
    </div>
</div>
@endif
<form class="edit-form mt-4" action="{{ url('admin/update-course') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $course->id }}">
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Course Name *</label>
            <input type="text" class="form-control" name="title" placeholder="Enter course name" value="{{ $course->title }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Course Image</label>
            <input type="file" class="form-control image-file" name="image">
        </div>
        <div class="mb-3 col-md-3">
            <label class="form-label" for="course-image">Price</label>
            <input type="number" class="form-control" name="price" value="{{ $course->price }}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label" for="course-image">Minimum Price</label>
            <input type="number" class="form-control" name="minPrice" value="{{ $course->minPrice }}">
        </div>
        <div class="mb-3 col-md-3">
            <label class="form-label">Course Duration *</label>
            <input type="text" class="form-control" name="duration" placeholder="Enter course duration" value="{{ $course->duration }}">
        </div>

        <div class="mb-3 col-md-3">
            <label class="form-label">Enrolled Students *</label>
            <input type="number" class="form-control" name="students" placeholder="Enter enrolled students" value="{{ $course->students }}">
        </div>

        <div class="mb-3 col-md-3">
            <label class="form-label">Offer Certificate *</label>
            <select class="form-control" name="certificate">
                <option value="Yes" @selected($course->certificate == 'Yes')>Yes</option>
                <option value="No" @selected($course->certificate == 'No')>No</option>
            </select>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Description *</label>
            <textarea class="ckeditor" name="description" placeholder="Course Description">{{ $course->description }}</textarea>
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Course Features</label>
            <textarea class="ckeditor" name="features" placeholder="Course Features">{{ $course->features }}</textarea>
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($course->status == 1)>Active</option>
                <option value="0" @selected($course->status == 0)>Non Active</option>
            </select>
        </div>
                                 
        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                <div class="message error"></div>
            </div>
        </div>
    </div>
</form>

<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>