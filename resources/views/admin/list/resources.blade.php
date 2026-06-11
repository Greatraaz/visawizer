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
                <div class="col-md-4">
                    <div class="float-end">
                        <div class="add-new">
                            <a class="btn btn-primary" onclick="addData();">Add New</a>
                        </div>
                    </div>
                </div>
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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Attachment</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($resources as $node)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $node->title }}</td>
                                            <td>{{ $node->description }}</td>
                                            <td><a href="{{ url($node->document) }}" class="btn-sm btn-primary">View Attachment</a></td>
                                            <td>{{ $node->created_at }}</td>
                                            <td>
                                                <span class="badge {{ $node->status ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $node->status ? 'Active' : 'Non Active' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" onclick="editItem({{ $node->id }}, 'edit-resources')" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                <a href="{{ url('admin/delete-resources/' . encrypt($node->id)) }}" onclick="return confirm('Are you sure?')" class="delete btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></a>
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

<div id="addModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">White Paper</h5>
        <button type="button" class="btn-close"  onclick="hideModal()"></button>
      </div>
      <div class="modal-body">
        <div class="message error"></div>
        <form class="add-form mt-4" action="{{ url('admin/store-resources') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label class="form-label">Resource Title *</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label">Document *</label>
                        <input type="file" class="form-control" name="document">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label">Description *</label>
                        <textarea class="form-control" style="height: 100px;" name="description"></textarea>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Status *</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                </div>
                                    
                <div class="mb-3 row">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                        <div class="message error"></div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection