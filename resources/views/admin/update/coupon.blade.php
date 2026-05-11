<div class="modal-header">
    <h1 class="modal-title fs-5">Edit Coupon</h1>
    <button type="button" class="btn-close" onclick="hideModal();"></button>
</div>
<div class="modal-body pt-0">

    <form class="edit-form mt-4" action="{{ url('admin/update-coupon') }}" method="POST" enctype="multipart/form-data" return_url="{{ url('admin/coupons') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $coupon->id }}">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="form-label">Coupon Name*</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Coupon Name" value="{{ $coupon->name }}">
                <div class="name error"></div>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Coupon Code*</label>
                <input type="text" class="form-control" name="code" placeholder="Enter Coupon Code" style="text-transform: uppercase;" value="{{ $coupon->code }}">
                <div class="code error"></div>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Discounted value in Price*</label>
                <input type="number" class="form-control" name="value" placeholder="Enter Flat Price Discounted" value="{{ $coupon->value }}">
                <div class="value error"></div>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Coupon Expiry Date*</label>
                <input type="date" class="form-control" name="expiryDate" placeholder="Enter Coupon Expiry Date" value="{{ $coupon->expiryDate }}">
                <div class="expiryDate error"></div>
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label">Coupon Usage Limit</label>
                <input type="number" class="form-control" name="usageLimit" placeholder="Enter Coupon Usage Limit" value="{{ $coupon->usageLimit }}">
                <div class="usageLimit error"></div>
            </div>  
            <div class="mb-3 col-md-6">
                <label class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="1" @selected($coupon->status == 1)>Active</option>
                    <option value="0" @selected($coupon->status == 0)>Non Active</option>
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
</div>