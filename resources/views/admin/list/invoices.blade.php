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
                                            <th>Invoice No</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Total Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($invoices as $node)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $node->invoiceNo }}</td>
                                        <td>{{ $node->username }}</td>
                                        <td>{{ $node->email }}</td>
                                        <td>{{ $node->mobile }}</td>
                                        <td>₹{{ $node->totalAmount }}</td>
                                        <td>{{ \Carbon\Carbon::parse($node->date)->format('d M Y, g:i A') }}</td>
                                        <td>
                                            <span class="badge {{ $node->status ? 'bg-success' : 'bg-danger' }}">
                                                {{ $node->status ? 'Active' : 'Non Active' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class='text-center table-action-buttons'>
                                                <a href='javascript:void(0)' onclick="viewItem({{ $node->id }})" class='view btn btn-primary btn-sm'><i class='fas fa-eye'></i></a>
                                            </div>
                                        </td>
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


<div id="editModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content"></div>
  </div>
</div>

@endsection
@push('script')
<script>
function viewItem(id) {
    $('.section.loader-section').show(); 
    $('.modal-content').load("{{ url('admin/view-invoice') }}/" + id, function() {
        $('#editModal').show();
        $('.section.loader-section').hide();   
    });
}
</script>
@endpush