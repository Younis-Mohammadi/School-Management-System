@extends('layouts.app')
@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Add New Teacher</h1>
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
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{old('name')}}" name="name"
                                    placeholder="First Name" required>
                                <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{old('last_name')}}"
                                    name="last_name" placeholder="Last Name" required>
                                <div class="text-danger">{{$errors->first('last_name')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-control form-select" required>
                                    <option value="">Select Gender</option>
                                    <option {{(old('gender') == 'Male') ? 'selected' : ''}} value="Male">Male</option>
                                    <option {{(old('gender') == 'Female') ? 'selected' : ''}} value="Female">Female
                                    </option>
                                    <option {{(old('gender') == 'Other') ? 'selected' : ''}} value="Other">Other</option>
                                </select>
                                <div class="text-danger">{{$errors->first('gender')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" class="form-control mb-4 mb-md-0" value="{{old('date_of_birth')}}"
                                    name="date_of_birth" required>
                                <div class="text-danger">{{$errors->first('date_of_birth')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date of Joining <span class="text-danger">*</span></label>
                                <input type="date" class="form-control mb-4 mb-md-0" value="{{old('admission_date')}}"
                                    name="admission_date">
                                <div class="text-danger">{{$errors->first('admission_date')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{old('mobile_number')}}"
                                    name="mobile_number" placeholder="Mobile Number">
                                <div class="text-danger">{{$errors->first('mobile_number')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Marital Status<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{old('marital_status')}}"
                                    name="marital_status" required>
                                <div class="text-danger">{{$errors->first('marital_status')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Profile Picture <span class="text-danger"></span></label>
                                <input type="file" class="form-control mb-4 mb-md-0" name="profile_pic">
                                <div class="text-danger">{{$errors->first('profile_pic')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Current Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{old('address')}}"
                                    name="address">
                                <div class="text-danger">{{$errors->first('address')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Permanent Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{old('permanent_address')}}" name="permanent_address">
                                <div class="text-danger">{{$errors->first('permanent_address')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Qualification<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{old('qualification')}}"
                                    name="qualification">
                                <div class="text-danger">{{$errors->first('qualification')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Work Experience<span class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{old('work_experience')}}"
                                    name="work_experience">
                                <div class="text-danger">{{$errors->first('work_experience')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Note<span class="text-danger">*</span></label>
                                <textarea name="note" class="form-control" id="" cols="30"
                                    rows="">{{old('note')}}</textarea>
                                <div class="text-danger">{{$errors->first('note')}}</div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control form-select" required>
                                    <option value="">Select Status</option>
                                    <option {{(old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
                                    <option {{(old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
                                </select>
                                <div class="text-danger">{{$errors->first('status')}}</div>
                            </div>
                            <hr>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                    value="{{old('email')}}" required>
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control mb-4 mb-md-0" name="password"
                                    placeholder="password" required>
                                <div class="text-danger">{{$errors->first('password')}}</div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Save
                                </button>
                                <a href="{{url('admin/admin/list')}}" style="padding: 3px 10px;" type="button"
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