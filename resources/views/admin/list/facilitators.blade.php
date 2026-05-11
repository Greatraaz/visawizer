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

                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-vertical-middle table-selectable">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>About</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @php $i = 1; @endphp
                                @foreach ($facilitators as $t)
                                    <tr>
                                        <td>{{ $i }}</td>

                                        <td>
                                            <img src="{{ asset($t->image) }}" width="80" class="rounded-3">
                                        </td>

                                        <td>{{ $t->name }}</td>

                                        <td>{{ $t->designation ?? '-' }}</td>

                                        <td>{!! Str::limit($t->about, 300) !!}</td>

                                        <td>
                                            <span class="badge {{ $t->status ? 'bg-success' : 'bg-danger' }}">
                                                {{ $t->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0)" 
                                               onclick="editItem({{ $t->id }}, 'edit-facilitator')" 
                                               class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="{{ url('admin/delete-facilitator/' . $t->id) }}"
                                               onclick="return confirm('Are you sure?')"
                                               class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
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

<div id="addModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Add Facilitator</h5>
        <button type="button" class="btn-close" onclick="hideModal()"></button>
      </div>

      <div class="modal-body">
        <form class="add-form mt-4" action="{{ url('admin/store-facilitator') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="mb-3 col-md-4">
                    <label class="form-label">Name *</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3 col-md-4">
                    <label class="form-label">Designation</label>
                    <input type="text" class="form-control" name="designation">
                </div>

                <div class="mb-3 col-md-4">
                    <label class="form-label">Image *</label>
                    <input type="file" class="form-control" name="image" required>
                </div>

                <div class="mb-3 col-md-12">
                    <label class="form-label">About Facilitator *</label>
                    <textarea class="ckeditor" name="about" placeholder="About Facilitator"></textarea>
                </div>

                <div class="mb-3 col-md-12">
                    <label class="form-label">Status *</label>
                    <select class="form-control" name="status" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="mb-3 col-12 text-center mt-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

            </div>
        </form>
      </div>

    </div>
  </div>
</div>

@endsection
@push('script')
<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
@endpush