@extends('layouts.app')
@section('content')

<div class="page-content">

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
                                <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" class="form-control mb-4 mb-md-0"
                                    value="{{old('date_of_birth', $getRecord->date_of_birth)}}" name="date_of_birth"
                                    required>
                                <div class="text-danger">{{$errors->first('date_of_birth')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('mobile_number', $getRecord->mobile_number)}}" name="mobile_number"
                                    placeholder="Mobile Number">
                                <div class="text-danger">{{$errors->first('mobile_number')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Marital Status<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('marital_status', $getRecord->marital_status)}}" name="marital_status"
                                    required>
                                <div class="text-danger">{{$errors->first('marital_status')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Profile Picture <span class="text-danger"></span></label>
                                <input type="file" class="form-control mb-4 mb-md-0" name="profile_pic">
                                <div class="text-danger">{{$errors->first('profile_pic')}}</div>
                                @if(!empty($getRecord->getProfile()))
                                    <img src="{{$getRecord->getProfile()}}" style="width: auto; height:50px;" alt="">
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Current Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('address', $getRecord->address)}}" name="address">
                                <div class="text-danger">{{$errors->first('address')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Permanent Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('permanent_address', $getRecord->permanent_address)}}"
                                    name="permanent_address">
                                <div class="text-danger">{{$errors->first('permanent_address')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Qualification<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('qualification', $getRecord->qualification)}}" name="qualification">
                                <div class="text-danger">{{$errors->first('qualification')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Work Experience<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('work_experience', $getRecord->work_experience)}}"
                                    name="work_experience">
                                <div class="text-danger">{{$errors->first('work_experience')}}</div>

                            </div>
                            <hr>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    value="{{old('email', $getRecord->email)}}" required>
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Update
                                </button>
                                <a href="{{url('teacher/dashboard/list')}}" style="padding: 3px 10px;" type="button"
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