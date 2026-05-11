@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">{{ ucfirst(last(Request::segments())) }}</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">{{ config('site.siteTitle') }}</li>
                        <li class="breadcrumb-item"> {{ ucfirst(last(Request::segments())) }} </li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="get-table-data">
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-vertical-middle table-selectable">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Order Id</th>
                                            <th>Customer</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Price</th>
                                            <th>Transaction Id</th>
                                            <th>Payment Id</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($orders as $node)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $node->orderId }}</td>
                                        <td>{{ $node->user->username ?? '' }}</td>
                                        <td>{{ $node->user->email ?? '' }}</td>
                                        <td>{{ $node->user->mobile ?? '' }}</td>
                                        <td>₹{{ $node->netAmount }}</td>
                                        <td>{{ $node->razorpay_order_id }}</td>
                                        <td>{{ $node->razorpay_payment_id }}</td>
                                        <td>{{ \Carbon\Carbon::parse($node->date)->format('d M Y, g:i A') }}</td>
                                    </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> 
</div>
@endsection