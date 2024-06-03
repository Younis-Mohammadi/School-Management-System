@extends('layouts.app')
@section('content')
<div class="page-content">
    @include('_message')
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>My Account</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('name', $getRecord->name)}}" name="name" placeholder="First Name"
                                    required>
                                <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('last_name', $getRecord->last_name)}}" name="last_name"
                                    placeholder="Last Name" required>
                                <div class="text-danger">{{$errors->first('last_name')}}</div>

                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-control form-select" required>
                                    <option value="">Select Gender</option>
                                    <option {{(old('gender', $getRecord->gender) == 'Male') ? 'selected' : ''}}
                                        value="Male">Male</option>
                                    <option {{(old('gender', $getRecord->gender) == 'Female') ? 'selected' : ''}}
                                        value="Female">Female
                                    </option>
                                    <option {{(old('gender', $getRecord->gender) == 'Other') ? 'selected' : ''}}
                                        value="Other">Other</option>
                                </select>
                                <div class="text-danger">{{$errors->first('gender')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Occupation</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('occupation', $getRecord->occupation)}}" name="occupation"
                                    placeholder="Occupation">
                                <div class="text-danger">{{$errors->first('occupation')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('mobile_number', $getRecord->mobile_number)}}" name="mobile_number"
                                    placeholder="Mobile Number" required>
                                <div class="text-danger">{{$errors->first('mobile_number')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('address', $getRecord->address)}}" name="address" placeholder="Address"
                                    required>
                                <div class="text-danger">{{$errors->first('address')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Profile Picture <span class="text-danger"></span></label>
                                <input type="file" class="form-control mb-4 mb-md-0" name="profile_pic">
                                <div class="text-danger">{{$errors->first('profile_pic')}}</div>
                                @if(!empty($getRecord->getProfile()))
                                    <img src="{{$getRecord->getProfile()}}" style="width: auto; height:50px;" alt="">
                                @endif
                            </div>
                            <hr>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    value="{{old('email', $getRecord->email)}}">
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Update
                                </button>
                                <a href="{{url('admin/parent/list')}}" style="padding: 3px 10px;" type="button"
                                    title="Back" class="btn btn-inverse-danger">
                                    <i data-feather="log-out"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection