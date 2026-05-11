@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-white rounded shadow-sm">
                    @include('user.sidebar')
                </div>
            </div>
            <div class="col-lg-9">
                <h3 class="fw-bold mb-4">Account Details</h3>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form id="editProfileForm" action="{{ url('my-account/update-profile') }}" method="POST">
                            @csrf
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="username" class="form-label fw-semibold">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="{{ Auth::user()->username }}" required>
                                    <span class="text-danger small username"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control" id="email" readonly value="{{ Auth::user()->email }}" required>
                                    <span class="text-danger small email"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="mobile" class="form-label fw-semibold">Mobile</label>
                                    <input type="number" class="form-control" id="mobile" name="mobile" value="{{ Auth::user()->mobile }}" required min="1">
                                    <span class="text-danger small mobile"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="password" class="form-label fw-semibold">New Password <small class="text-muted">(Leave blank to keep current password)</small></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
                                    <span class="text-danger small password"></span>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success px-4">
                                        <i class="fas fa-save me-2"></i>Update Profile
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('script')
<script>
$(document).on('submit', 'form#editProfileForm', function(e) {    
    e.preventDefault();
    $('.spinner-container').show();
    $('.text-danger').text('');
    
    var form = $(this);
    var url = form.attr('action');
  
    $.ajax({
        type: 'POST',
        url: url,
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        success: function (response) {
            if (response.status == 1) {
                toastr.success(response.message);
                setTimeout(() => {
                    window.location.reload();
                }, 1500);
            } else {
                toastr.error(response.message);
            }
        },
        error: function (xhr) {
            $('.text-danger').text('');
            if (xhr.status === 422) {
                let res = xhr.responseJSON || {};
                if(res.errors){
                    $.each(res.errors, function (field, messages) {
                        $('.' + field).text(messages[0]);
                    });
                }
                toastr.error(res.message || 'Validation error');
            } else {
                toastr.error('Something went wrong');
            }
        },
        complete: function () {
            $('.spinner-container').hide();
        }
    });
});
</script>
@endpush