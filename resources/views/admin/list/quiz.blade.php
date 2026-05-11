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
                                            <th>Quesion</th>
                                            <th>Opt. 1</th>
                                            <th>Opt. 2</th>
                                            <th>Opt. 3</th>
                                            <th>Opt. 4</th>
                                            <th>Answer</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($quiz as $node)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $node->question }}</td>
                                        <td>{{ $node->option1 }}</td>
                                        <td>{{ $node->option2 }}</td>
                                        <td>{{ $node->option3 }}</td>
                                        <td>{{ $node->option4 }}</td>
                                        <td>{{ $node->answer }}</td>
                                        <td>{{ \Carbon\Carbon::parse($node->date)->format('d M Y') }}</td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="editItem({{ $node->id }}, 'edit-quiz')" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                            <a href="{{ url('admin/delete-quiz/' . encrypt($node->id)) }}" onclick="return confirm('Are you sure?')" class="delete btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></a>
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
        <h5 class="modal-title">Add Quiz</h5>
        <button type="button" class="btn-close"  onclick="hideModal()"></button>
      </div>
      <div class="modal-body">
        <div class="message error"></div>
        <form class="add-form mt-4" action="{{ url('admin/store-quiz') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="course-name">Question *</label>
                    <input type="text" class="form-control" name="question">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-name">Option 1 *</label>
                    <input type="text" class="form-control" name="option1">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-name">Option 2 *</label>
                    <input type="text" class="form-control" name="option2">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-name">Option 3 *</label>
                    <input type="text" class="form-control" name="option3">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-name">Option 4 *</label>
                    <input type="text" class="form-control" name="option4">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-name">Answer *</label>
                    <input type="text" class="form-control" name="answer">
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="course-name">Category *</label>
                    <select class="form-control" name="categoryId">
                        <option value="">-- Select --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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