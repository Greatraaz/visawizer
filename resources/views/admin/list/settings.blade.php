@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Settings</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">{{ config('site.siteTitle') }}</li>
                        <li class="breadcrumb-item"> Settings </li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="message error"></div>
                        <form class="add-form mt-4" action="{{ url('admin/store-settings') }}" method="POST">
                            @csrf

                            <!-- Phone 1 -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Phone 1</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="phone1" class="form-control"
                                           value="{{ $settings->phone1 ?? '' }}" placeholder="Enter Phone 1">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Phone 2</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="phone2" class="form-control"
                                           value="{{ $settings->phone2 ?? '' }}" placeholder="Enter Phone 2">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email 1</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email1" class="form-control"
                                           value="{{ $settings->email1 ?? '' }}" placeholder="Enter Email 1">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email 2</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email2" class="form-control"
                                           value="{{ $settings->email2 ?? '' }}" placeholder="Enter Email 2">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Address 1</label>
                                <div class="col-sm-10">
                                    <textarea name="address1" class="form-control" placeholder="Enter Address 1">{{ $settings->address1 ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Address 2</label>
                                <div class="col-sm-10">
                                    <textarea name="address2" class="form-control" placeholder="Enter Address 2">{{ $settings->address2 ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fb" class="form-control"
                                           value="{{ $settings->fb ?? '' }}" placeholder="Facebook URL">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" name="insta" class="form-control"
                                           value="{{ $settings->insta ?? '' }}" placeholder="Instagram URL">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">LinkedIn</label>
                                <div class="col-sm-10">
                                    <input type="text" name="linkedin" class="form-control"
                                           value="{{ $settings->linkedin ?? '' }}" placeholder="LinkedIn URL">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">YouTube</label>
                                <div class="col-sm-10">
                                    <input type="text" name="youtube" class="form-control"
                                           value="{{ $settings->youtube ?? '' }}" placeholder="YouTube URL">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" name="twitter" class="form-control"
                                           value="{{ $settings->twitter ?? '' }}" placeholder="Twitter URL">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Pinterest</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pinterest" class="form-control"
                                           value="{{ $settings->pinterest ?? '' }}" placeholder="Pinterest URL">
                                </div>
                            </div>


                            <div class="text-end">
                                <button class="btn btn-primary px-4">Save Settings</button>
                                <div class="message error"></div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div> 
</div>

@endsection