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
                                        <th>Testimonial</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @php $i = 1; @endphp
                                @foreach ($testimonials as $t)
                                    <tr>
                                        <td>{{ $i }}</td>

                                        <td>
                                            <img src="{{ asset($t->image) }}" width="80" class="rounded-3">
                                        </td>

                                        <td>{{ $t->name }}</td>

                                        <td>{{ $t->designation ?? '-' }}</td>

                                        <td>{{ $t->testimonial }}</td>

                                        <td>
                                            <span class="badge {{ $t->status ? 'bg-success' : 'bg-danger' }}">
                                                {{ $t->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0)" 
                                               onclick="editItem({{ $t->id }}, 'edit-testimonial')" 
                                               class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="{{ url('admin/delete-testimonial/' . $t->id) }}"
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
        <h5 class="modal-title">Add Testimonial</h5>
        <button type="button" class="btn-close" onclick="hideModal()"></button>
      </div>

      <div class="modal-body">
        <form class="add-form mt-4" action="{{ url('admin/store-testimonial') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">Testimonial Message *</label>
                    <textarea class="form-control" name="testimonial" style="height: 100px;" required></textarea>
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
