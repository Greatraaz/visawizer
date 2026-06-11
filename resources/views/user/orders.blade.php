@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

<style type="text/css">
.btana{
    background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
    color: #fff;
}
</style>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-white rounded shadow-sm">
                    @include('user.sidebar')
                </div>
            </div>
            <div class="col-lg-9">
                <h3 class="fw-bold mb-4">Find Your Order Details</h3>
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="fw-semibold">Order Id</th>
                                        <th class="fw-semibold">Date</th>
                                        <th class="fw-semibold">Status</th>
                                        <th class="fw-semibold">Total</th>
                                        <th class="fw-semibold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($orders as $node)
                                    <tr>
                                        <td class="align-middle">{{ $node->orderId }}</td>
                                        <td class="align-middle">{{ \Carbon\Carbon::parse($node->date)->format('d M Y, g:i A') }}</td>
                                        <td class="align-middle">
                                            @if($node->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="align-middle">₹{{ $node->netAmount }}</td>
                                        <td class="align-middle">
                                            <button class="btn btn-sm btana" onclick="viewInvoice('{{ encrypt($node->id) }}')">
                                                View Invoice
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-4">No Orders Yet</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="viewModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content"></div>
  </div>
</div>
@endsection 
@push('script')
<script>
function viewInvoice(id) {
    $('.spinner-container').show(); 
    $('.modal-content').load("{{ url('my-account/view-order-invoice') }}/" + id, function() {
        $('#viewModal').show();
        $('.spinner-container').hide();   
    });
}
</script>
@endpush