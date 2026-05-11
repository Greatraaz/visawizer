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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($users as $node)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $node->username }}</td>
                                        <td>{{ $node->email }}</td>
                                        <td>{{ $node->mobile }}</td>
                                        <td>{{ $node->address }}</td>
                                        <td>
                                            <span class="badge {{ $node->status ? 'bg-success' : 'bg-danger' }}">
                                                {{ $node->status ? 'Active' : 'Non Active' }}
                                            </span>
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($node->date)->format('d M Y, g:i A') }}</td>
                                        <!-- <td>
                                            <div class='text-center table-action-buttons'>
                                                <a href='javascript:void(0)' onclick="viewItem({{ $node->id }})" class='view btn btn-primary btn-sm'><i class='fas fa-eye'></i></a>
                                            </div>
                                            <div class='display-inline table-action-buttons'>
                                                <a href='javascript:void(0)' onclick="deleteItem({{ $node->id }})" class='delete btn btn-primary btn-sm'><i class='fas fa-trash-alt'></i></a>
                                            </div>
                                        </td> -->
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Customer Details</h5>
        <button type="button" class="close"  onclick="hideModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="data"></div>
      </div>
    </div>
  </div>
</div>

@endsection
@push('script')
<script>
function viewItem(id) {
    $('.section.loader-section').show(); 
    $('#data').load("{{ url('admin/view-user') }}/" + id, function() {
        $('#editModal').show();
        $('.section.loader-section').hide();   
    });
}
</script>
@endpush