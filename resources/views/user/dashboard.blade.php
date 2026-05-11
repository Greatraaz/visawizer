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
            <div class="col-md-9">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-2">Hello {{ $user->username }}, Welcome to <span class="text-success">Ethics<span class="text-warning">4</span>Work</span></h3>
                        <p class="text-muted mb-4">Manage your account information, orders and more.</p>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="bg-light p-4 rounded text-center border-top border-success border-4">
                                    <a href="{{ url('my-account/orders') }}">
                                        <i class="fas fa-box fa-3x text-success mb-3"></i>
                                        <p class="text-muted mb-2">Total Orders</p>
                                        <h4 class="fw-bold mb-0">{{ $totalOrders }}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 