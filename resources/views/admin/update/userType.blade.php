<form class="edit-form mt-4" action="{{ url('admin/update-usertype') }}" method="POST" enctype="multipart/form-data" return_url="{{ url('admin/user-type') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $userType->id }}">
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">User Type Name*</label>
            <input type="text" class="form-control" name="userType" placeholder="Enter User Type Name" value="{{ $userType->userType }}" required>
            <div class="usertype error"></div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Status</label>
            <select class="form-control" name="status">
                <option value="1" @selected($userType->status == 1)>Active</option>
                <option value="0" @selected($userType->status == 0)>Non Active</option>
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