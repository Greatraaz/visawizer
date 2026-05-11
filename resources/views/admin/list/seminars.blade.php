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
                                            <th>Event Type</th>
                                            <th>Speaker</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($seminars as $node)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td><img src="{{ asset($node->image) }}" class="rounded-3" width="100"></td>
                                            <td>{{ $node->title }}</td>
                                            <td>{{ $node->type }}</td>
                                            <td>{{ $node->Speaker }}</td>
                                            <td>{{ $node->start_date }}</td>
                                            <td>{{ $node->start_time }}</td>
                                            <td>
                                                <span class="badge {{ $node->status ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $node->status ? 'Active' : 'Non Active' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" onclick="editItem({{ $node->id }}, 'edit-seminar')" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                <a href="{{ url('admin/view-enquiries/' . encrypt($node->id)) }}" target="_blank" class="view btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                                <a href="{{ url('admin/delete-seminar/' . encrypt($node->id)) }}" onclick="return confirm('Are you sure?')" class="delete btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></a>
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
        <h5 class="modal-title">Events</h5>
        <button type="button" class="btn-close"  onclick="hideModal()"></button>
      </div>
      <div class="modal-body">
        <div class="message error"></div>
        <form class="add-form mt-4" action="{{ url('admin/store-seminar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="row">

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Type *</label>
                        <select class="form-control" name="type">
                            <option value="Webinar">Webinar</option>
                            <option value="Seminar">Seminar</option>
                            <option value="Event">Event</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-8">
                        <label class="form-label">Title *</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Speaker *</label>
                        <input type="text" class="form-control" name="speaker">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Image *</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Location *</label>
                        <input type="text" class="form-control" name="location">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Start Date *</label>
                        <input type="date" class="form-control" name="start_date">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label">End Date *</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Start Time *</label>
                        <input type="time" class="form-control" name="start_time">
                    </div>

                    <!-- End Time -->
                    <div class="mb-3 col-md-4">
                        <label class="form-label">End Time *</label>
                        <input type="time" class="form-control" name="end_time">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label">Description *</label>
                        <textarea class="form-control ckeditor" name="description"></textarea>
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
@push('script')
<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
@endpush