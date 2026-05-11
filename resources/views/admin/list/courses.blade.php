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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Duration</th>
                                            <th>Certificate</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($courses as $node)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td><img src="{{ asset($node->image) }}" class="rounded-3" width="100"></td>
                                            <td>{{ $node->title }}</td>
                                            <td>{{ $node->price }}</td>
                                            <td>{{ $node->duration }}</td>
                                            <td>{{ $node->certificate }}</td>
                                            <td>
                                                <span class="badge {{ $node->status ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $node->status ? 'Active' : 'Non Active' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" onclick="editItem({{ $node->id }}, 'edit-course')" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                <a href="{{ url('admin/view-course-enquiries/' . $node->title) }}" target="_blank" class="view btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                                <a href="{{ url('admin/delete-course/' . encrypt($node->id)) }}" onclick="return confirm('Are you sure?')" class="delete btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></a>
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
        <h5 class="modal-title">Add Course</h5>
        <button type="button" class="btn-close"  onclick="hideModal()"></button>
      </div>
      <div class="modal-body">
        <div class="message error"></div>
        <form class="add-form mt-4" action="{{ url('admin/store-course') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-name">Course Name *</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-image">Course Image *</label>
                    <input type="file" class="form-control image-file" name="image">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="course-price">Price</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="course-image">Minimum Price</label>
                    <input type="number" class="form-control" name="minPrice">
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" >Offer Certificate *</label>
                    <select class="form-control" name="certificate">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div> 
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-image">Course Duration *</label>
                    <input type="text" class="form-control" name="duration">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-image">Enrolled Students *</label>
                    <input type="number" class="form-control" name="students">
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label">Description *</label>
                    <textarea class="ckeditor" name="description" placeholder="Product Description"></textarea>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label">Product Features</label>
                    <textarea class="ckeditor" name="features" placeholder="Product features"></textarea>
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" >Status *</label>
                    <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Non Active</option>
                    </select>
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
@push('script')
<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
@endpush