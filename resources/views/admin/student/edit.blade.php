@extends('layouts.app')
@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Edit Student Details</h1>
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
                                <label class="form-label">Admission Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('admission_number', $getRecord->admission_number)}}" name="admission_number"
                                    placeholder="Admission Number" required>
                                <div class="text-danger">{{$errors->first('admission_number')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Roll Number</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('roll_number', $getRecord->roll_number)}}" name="roll_number"
                                    placeholder="Roll Number">
                                <div class="text-danger">{{$errors->first('roll_number')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Class <span class="text-danger">*</span></label>
                                <select name="class_id" id="class_id" class="form-control form-select" required>
                                    <option value="">Select Class</option>
                                    @foreach ($getClass as $value)
                                        <option {{(old('class_id', $getRecord->class_id) == $value->id) ? 'selected' : ''}}
                                            value="{{$value->id}}">
                                            {{$value->name}}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">{{$errors->first('class_id')}}</div>

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
                                    value="{{old('date_of_birth', $getRecord->date_of_birth)}}" name="date_of_birth" required>
                                <div class="text-danger">{{$errors->first('date_of_birth')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Caste</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('caste', $getRecord->caste)}}" name="caste" placeholder="Caste">
                                <div class="text-danger">{{$errors->first('caste')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Religion</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('religion', $getRecord->religion)}}" name="Religion"
                                    placeholder="Religion">
                                <div class="text-danger">{{$errors->first('religion')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('mobile_number', $getRecord->mobile_number)}}" name="mobile_number"
                                    placeholder="Mobile Number">
                                <div class="text-danger">{{$errors->first('mobile_number')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Admission Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control mb-4 mb-md-0"
                                    value="{{old('admission_date', $getRecord->admission_date)}}" name="admission_date" required>
                                <div class="text-danger">{{$errors->first('admission_date')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Profile Picture <span class="text-danger"></span></label>
                                <input type="file" class="form-control mb-4 mb-md-0" name="profile_pic">
                                <div class="text-danger">{{$errors->first('profile_pic')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Blood Group <span class="text-danger"></span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('blood_group', $getRecord->blood_group)}}" name="blood_group"
                                    placeholder="Blood Group">
                                <div class="text-danger">{{$errors->first('blood_group')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Height <span class="text-danger"></span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('height', $getRecord->height)}}" name="height" placeholder="Height">
                                <div class="text-danger">{{$errors->first('height')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Weight <span class="text-danger"></span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('weight', $getRecord->weight)}}" name="weight" placeholder="Weight">
                                <div class="text-danger">{{$errors->first('weight')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control form-select" required>
                                    <option value="">Select Status</option>
                                    <option {{(old('status', $getRecord->status) == 0) ? 'selected' : ''}} value="0">Active
                                    </option>
                                    <option {{(old('status', $getRecord->status) == 1) ? 'selected' : ''}} value="1">
                                        Inactive</option>
                                </select>
                                <div class="text-danger">{{$errors->first('status')}}</div>
                            </div>
                            <hr>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    value="{{old('email', $getRecord->email)}}" required>
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control mb-4 mb-md-0" name="password"
                                    placeholder="password">
                                <p>Do you want to change password so please add new password.</p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Update
                                </button>
                                <a href="{{url('admin/student/list')}}" style="padding: 3px 10px;" type="button"
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