<style type="text/css">
.status-form {
    display: inline;
    float: inline-end;
    transform: translateY(11px);
}
.tygh {
    padding: 5px 16px !important;
    border-color: #d4d4d4;
    font-size: 13px !important;
    border-radius: 5px;
}
.status-form input[type="submit"] {
    font-size: 12px;
    background: #f7bc2f;
    color: #fff;
    border-color: #f7bc2f;
}
.modify {
    background: #0f63af;
    border: none;
    padding: 2px 10px;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
    margin-left: 20px;
}
thead {
    background: #0f63af;
    color: #fff;
}
</style>

<div class="modal-header">
    <h1 class="modal-title fs-5" id="addStaffLabel">
        Order ID: {{ $order->orderId }}
        Date: {{ \Carbon\Carbon::parse($order->date)->format('d M Y, g:i A') }}
    </h1>

    <button type="button" class="btn-close" onclick="hideModal();"></button>
</div>

<div class="modal-body">
    <div class="p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Billing Details: </h5>
                        <hr style="margin: 4px 0 10px;">
                        <ul class="detsl">
                            <li><b>Name: </b>{{ $order->user->username ?? '' }}</li>
                            <li><b>Email: </b>{{ $order->user->email ?? '' }}</li>
                            <li><b>Phone: </b>{{ $order->user->mobile ?? '' }}</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 style="display: contents;">Status: </h5> 
                        <span style="color: #fff;border-radius: 30px;padding: 2px 12px;font-size: 13px;" class="@if($order['status'] == 1) bg-success @else bg-danger @endif">@if($order['status'] != 1) Inactive @else Active @endif</span>
                        <hr style="margin: 4px 0 10px;">
                    </div>
                </div>

                <hr style="margin: 4px 0 10px;">

                <h5 style="margin-top: 10px;display: contents;">Payment Method: </h5>
                <u>{{ $order->paymentMethod }}</u>

                <hr style="margin: 4px 0 10px;">
                <h5 style="margin-top: 10px;">Order Details: </h5>
                <hr style="margin: 4px 0 10px;">

                <table class="table order-summery-desc">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th><span>Course</span></th>
                            <th><span>Quantity</span></th>
                            <th><span>Base Price</span></th>
                            <th><span>Pay Amount</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $product = json_decode($order->productDetail); @endphp

                        @if(!empty($product))
                            <tr>
                                <td>1</td>
                                <td>{{ $product->title }}</td>
                                <td>1</td>
                                <td>₹{{ $product->price }}</td>
                                <td>₹{{ $order->netAmount }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td class="no-line" colspan="3"></td>
                            <td class="yes-line">Net Total:</td>
                            <td class="yes-line"><b>₹{{ $order->netAmount }}</b></td>
                        </tr>
                    </tbody>
                </table>

                <h5 style="margin-top: 10px;display: contents;">User Remark: </h5>
                <u>{{ $order->message ?? '-' }}</u>
            </div>
        </div>
    </div>
</div>
