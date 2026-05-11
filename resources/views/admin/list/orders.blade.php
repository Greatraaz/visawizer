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
                                            <th>User Remark</th>
                                            <th>Date</th>
                                            <th>Action</th>
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
                                        <td>{{ $node->message ?? '-' }}</td>
                                        <td>{{ \Carbon\Carbon::parse($node->date)->format('d M Y, g:i A') }}</td>
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
    $('.modal-content').load("{{ url('admin/view-order') }}/" + id, function() {
        $('#editModal').show();
        $('.section.loader-section').hide();   
    });
}

$(document).on('submit', 'form.edit-form', function (e) {
    e.preventDefault();
    $('.section.loader-section').show();          
    var form = $(this);
    var url = form.attr('action');
    var return_url = form.attr('return_url');
  
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
                window.location.replace(return_url);
            }else {
                $('.message').text(response.message);
                toastr.error(response.message );
            }
        },
        error: function (xhr) {
            $('.error').text('');
            if (xhr.status === 422) {
                let res = xhr.responseJSON; 
                $.each(res.errors, function (field, messages) {
                    $('.' + field).text(messages[0]);
                });
                $('.message').text(res.message);
                toastr.error(res.message );
            } else {
                toastr.error(xhr.status);
            }
        },
        complete: function () {
            $('.section.loader-section').hide();
        }
    });
});
</script>
@endpush