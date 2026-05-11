@extends('layouts.frontend')
@section('content') 

<style>
    .loginPage::before{
        content:'';
        position:absolute;
        inset:0;
        background:rgba(0,0,0,.10);
    }
    .loginPage > .container{
        position:relative;
        z-index:2;
    }

    label.form-label {
        font-weight: 600;
    }
    .loginPage{
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height:100vh;
        padding: 80px 0;
    }
    .auth-wrapper{
        width:100%;
        max-width:420px;
    }
    .auth-card{
        border-radius:20px;
        box-shadow:0 25px 60px rgba(0,0,0,.25);
        overflow:hidden;
        animation:fadeIn .5s ease;
    }
    @keyframes fadeIn{
        from{opacity:0; transform:translateY(10px)}
        to{opacity:1; transform:translateY(0)}
    }
    .auth-header{
        background:linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
        color:#fff;
        text-align:center;
        padding:15px;
    }
    .auth-header h4{
        margin:0;
        font-weight:600;
    }
    .form-control{
        border-radius:12px;
        padding:12px;
    }
    .btn{
        border-radius:12px;
        padding:12px;
        font-weight:500;
    }
    .switch-link{
        cursor:pointer;
        color:var(--theme-color-3);
        font-weight:500;
    }
    .switch-link:hover{
        text-decoration:underline;
    }
</style>

<section class="loginPage" style="background-image: url('{{ asset('assets/images/banner/home-banner-4.webp') }}');">
<div class="container">
    <div class="auth-wrapper">
        <div class="card auth-card">

            <!-- LOGIN -->
            <form id="loginForm" action="{{ url('signin') }}">
                @csrf
                <div class="auth-header">
                    <h4 class="text-white">Welcome Back</h4>
                    <small>Login to your account</small>
                </div>
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                        </div>
                        <div class="email text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <div class="password text-danger"></div>
                    </div>
                    <button class="btn btn-success w-100" type="submit">Login</button>
                    <div class="lmessage text-danger"></div>

                    <div class="text-center mt-3">
                        <span class="switch-link" onclick="showForgot()">Forgot Password?</span><br>
                        <small>Don’t have an account?</small>
                        <span class="switch-link" onclick="showRegister()"> Register</span>
                    </div>
                </div>
            </form>

            <!-- REGISTER -->
            <form action="{{ url('signup') }}" id="registerForm" class="d-none">
                @csrf
                <div class="auth-header">
                    <h4 class="text-white">Create Account</h4>
                    <small>Join us in few seconds</small>
                </div>
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Your name" required>
                        <div class="username text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address" required>
                        <div class="email text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="tel" name="mobile" class="form-control" placeholder="Email mobile no." required>
                        <div class="mobile text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Create password" required>
                        <div class="password text-danger"></div>
                    </div>
                    <button class="btn btn-success w-100" type="submit">Register</button>
                    <div class="rmessage text-danger"></div>

                    <div class="text-center mt-3">
                        <small>Already have an account?</small>
                        <span class="switch-link" onclick="showLogin()"> Login</span>
                    </div>
                </div>
            </form>

            <!-- FORGOT -->
            <form action="{{ url('forget-password') }}" id="forgotForm" class="d-none">
                @csrf
                <div class="auth-header">
                    <h4 class="text-white">Reset Password</h4>
                    <small>We’ll send you a reset link</small>
                </div>
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label class="form-label">Registered Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <button class="btn btn-warning w-100" type="submit">Send Reset Link</button>

                    <div class="text-center mt-3">
                        <span class="switch-link" onclick="showLogin()">← Back to Login</span>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</section>

<script type="text/javascript">
function hideAll(){
loginForm.classList.add('d-none');
registerForm.classList.add('d-none');
forgotForm.classList.add('d-none');
}
function showLogin(){ hideAll(); loginForm.classList.remove('d-none'); }
function showRegister(){ hideAll(); registerForm.classList.remove('d-none'); }
function showForgot(){ hideAll(); forgotForm.classList.remove('d-none'); }

</script>
@endsection 
@push('script')
<script>

    $(document).on('submit','form#registerForm',function(e){    
        e.preventDefault();
        $('.spinner-container').show();          
        var form = $(this);
        var url = form.attr('action');
      
        $.ajax({
            type: 'POST',
            url: url,
            data: new FormData(this),
            dataType:'json',
            contentType: false,
            processData: false,
            cache:false,
            success: function (response) {
                if (response.status == 1) {
                    toastr.success( response.message );
                    window.location.reload();
                }else {
                    $('.rmessage').text(response.message);
                    toastr.error(response.message );
                }
            },
            error: function (xhr) {
                $('.text-danger').text('');
                if (xhr.status === 422) {
                    let res = xhr.responseJSON; 
                    $.each(res.errors, function (field, messages) {
                        $('.' + field).text(messages[0]);
                    });
                    $('.rmessage').text(res.message);
                    toastr.error(res.message );
                } else {
                    toastr.error(xhr.status);
                }
            },
            complete: function () {
                $('.spinner-container').hide();
            }
        });
    }) 

    $(document).on('submit','form#loginForm',function(e){    
        e.preventDefault();

        $('.spinner-container').show();          

        var form = $(this);
        var url = form.attr('action');
      
        $.ajax({
            type: 'POST',
            url: url,
            data: new FormData(this),
            dataType:'json',
            contentType: false,
            processData: false,
            cache:false,

            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    window.location.reload();
                } else {
                    $('.lmessage').text(response.message);
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
