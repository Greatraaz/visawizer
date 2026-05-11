@extends('layouts.admin')
@section('content')
<style type="text/css">
p.mb-0.mt-1 a {
    background: #eda117;
    border-radius: 50px;
    padding: 5px 15px;
}
</style>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Dashboard</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome to {{ config('site.siteTitle') }} Dashboard</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Courses</h5>
                            <h4 class="fw-medium font-size-24">{{ $courses }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/courses')}}">View Courses</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Events</h5>
                            <h4 class="fw-medium font-size-24">{{ $seminars }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/seminars')}}">View Seminars</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Facilitators</h5>
                            <h4 class="fw-medium font-size-24">{{ $facilitators }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/dashboard/facilitators')}}">View Facilitators</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Enquiries</h5>
                            <h4 class="fw-medium font-size-24">{{ $enquiries }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/enquiries')}}">View Enquiries</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Users</h5>
                            <h4 class="fw-medium font-size-24">{{ $users }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/users')}}">View Users</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Orders</h5>
                            <h4 class="fw-medium font-size-24">{{ $orders }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/orders')}}">View Orders</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Invoices</h5>
                            <h4 class="fw-medium font-size-24">{{ $invoice }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/invoices')}}">View Invoices</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="https://themesbrand.com/veltrix/layouts/assets/images/services-icon/02.png">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">Quiz</h5>
                            <h4 class="fw-medium font-size-24">{{ $quiz }}</h4>
                        </div>
                        <div class="pt-2">
                            <p class="mb-0 mt-1"><a class="text-white" href="{{url('admin/quiz')}}">View Questions</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div>
@endsection