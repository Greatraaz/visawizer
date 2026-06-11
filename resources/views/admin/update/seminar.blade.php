@if($seminar->image)
<div class="d-flex gap-5">
    <div>
        <label class="form-label"> Image</label>
        <div class="main-product-image">
            <img src="{{ asset($seminar->image) }}" class="rounded-3" width="100" height="100">
        </div>
    </div>
</div>
@endif
<form class="edit-form mt-4" action="{{ url('admin/update-seminar') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $seminar->id }}">
    <div class="row">
        <div class="mb-3 col-md-4">
            <label class="form-label">Type *</label>
            <select class="form-control" name="type">
                <option value="Webinar" @selected($seminar->type == 'Webinar')>Webinar</option>
                <option value="Seminar" @selected($seminar->type == 'Seminar')>Seminar</option>
                <option value="Event" @selected($seminar->type == 'Event')>Event</option>
            </select>
        </div>

        <div class="mb-3 col-md-8">
            <label class="form-label">Title *</label>
            <input type="text" class="form-control" name="title" value="{{ $seminar->title }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Speaker *</label>
            <input type="text" class="form-control" name="speaker" value="{{ $seminar->speaker }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Location *</label>
            <input type="text" class="form-control" name="location" value="{{ $seminar->location }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Start Date *</label>
            <input type="date" class="form-control" name="start_date" value="{{ $seminar->start_date }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">End Date *</label>
            <input type="date" class="form-control" name="end_date" value="{{ $seminar->end_date }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Start Time *</label>
            <input type="time" class="form-control" name="start_time" value="{{ $seminar->start_time }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">End Time *</label>
            <input type="time" class="form-control" name="end_time" value="{{ $seminar->end_time }}">
        </div>

        <div class="mb-3 col-md-12">
            <label class="form-label">Description *</label>
            <textarea class="form-control ckeditor" name="description">{{ $seminar->description }}</textarea>
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Status *</label>
            <select class="form-control" name="status">
                <option value="1" @selected($seminar->status == 1)>Active</option>
                <option value="0" @selected($seminar->status == 0)>Inactive</option>
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