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
                        <li class="breadcrumb-item">{{ ucfirst(last(Request::segments())) }}</li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-end">
                        <a class="btn btn-primary" onclick="addData();">Add New</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- List Table -->
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
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Button Text</th>
                                        <th>Link</th>
                                        <th>Order No</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @php $i = 1; @endphp
                                @foreach ($banners as $b)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
                                            <img src="{{ asset($b->image) }}" width="80" class="rounded-3">
                                        </td>
                                        <td>{{ $b->heading }}</td>
                                        <td>{{ $b->description }}</td>
                                        <td>{{ $b->button }}</td>
                                        <td>{{ $b->link }}</td>
                                        <td>{{ $b->orderNo }}</td>

                                        <td>
                                            <span class="badge {{ $b->status ? 'bg-success' : 'bg-danger' }}">
                                                {{ $b->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0)"
                                               onclick="editItem({{ $b->id }}, 'edit-banner')"
                                               class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="{{ url('admin/delete-banner/' . $b->id) }}"
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

<!-- Add Modal -->
<div id="addModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add Banner</h5>
                <button type="button" class="btn-close" onclick="hideModal()"></button>
            </div>

            <div class="modal-body">
                <form class="add-form mt-4" action="{{ url('admin/store-banner') }}" 
                      method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Heading *</label>
                            <input type="text" class="form-control" name="heading" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Button Text *</label>
                            <input type="text" class="form-control" name="button" required>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label">Description *</label>
                            <textarea class="form-control" name="description" required 
                                      style="height: 100px;"></textarea>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Button Link *</label>
                            <input type="text" class="form-control" name="link" required>
                        </div>

                        <div class="mb-3 col-md-3">
                            <label class="form-label">Display Order No *</label>
                            <input type="number" class="form-control" name="orderNo" required>
                        </div>

                        <div class="mb-3 col-md-3">
                            <label class="form-label">Status *</label>
                            <select class="form-control" name="status" required>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label">Image <small>(size: 1356*571)</small> *</label>
                            <input type="file" class="form-control" name="image" required>
                            <small class="text-muted">Allowed: jpg, jpeg, png, webp | Max: 1MB</small>
                        </div>

                        <div class="col-12 text-center mt-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection
