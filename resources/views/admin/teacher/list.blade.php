@extends('layouts.app')
@section('content')

<div class="page-content">

    @include('_message')
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Teacher List (Total :{{$getRecord->total()}})</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="get">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-2">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{Request::get('name')}}"
                                    name="name" placeholder="Name">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{Request::get('last_name')}}" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="{{Request::get('email')}}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control form-select">
                                    <option value="">Select Gender</option>
                                    <option {{(Request::get('gender') == 'Male') ? 'selected' : ''}} value="Male">Male
                                    </option>
                                    <option {{(Request::get('gender') == 'Female') ? 'selected' : ''}} value="Female">
                                        Female
                                    </option>
                                    <option {{(Request::get('gender') == 'Other') ? 'selected' : ''}} value="Other">Other
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number"
                                    value="{{Request::get('mobile_number')}}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Marital Status</label>
                                <input type="text" class="form-control" name="marital_status"
                                    placeholder="Marital Status" value="{{Request::get('martial_status')}}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Current Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address"
                                    value="{{Request::get('address')}}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Status</label>
                                <select name="status" id="status" class="form-control form-select">
                                    <option value="">Select Status</option>
                                    <option {{(Request::get('status') == 100) ? 'selected' : ''}} value="100">Active
                                    </option>
                                    <option {{(Request::get('status') == 1) ? 'selected' : ''}} value="1">
                                        Inactive
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Date of Joining</label>
                                <input type="date" class="form-control" name="admission_date"
                                    value="{{Request::get('admission_date')}}">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Created Date</label>
                                <input type="date" class="form-control" name="date" value="{{Request::get('date')}}">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-inverse-primary"
                                    style="margin-top: 22px;">Search</button>
                                <a href="{{url('admin/teacher/list')}}" class="btn btn-inverse-danger"
                                    style="margin-top: 22px;">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <h3 class="mb-3">Teachers</h3>
                    <a href="{{url('admin/teacher/add')}}" class="btn btn-outline-light">Add Teacher</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Profile Picture</th>
                                    <th>Teacher Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Date of Joining</th>
                                    <th>Mobile Number</th>
                                    <th>Marital Status</th>
                                    <th>Current Address</th>
                                    <th>Permanent Address</th>
                                    <th>Qualification</th>
                                    <th>Work Experience</th>
                                    <th>Note</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
$count = 0;
                            ?>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr class="text-center" style="vertical-align: middle;">
                                        <td>{{++$count}}</td>
                                        <td>
                                            @if (!empty($value->getProfile()))
                                                <img src="{{$value->getProfile()}}"
                                                    style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                            @endif
                                        </td>
                                        <td>{{$value->name}} {{$value->last_name}}</td>
                                        <td>{{$value->parent_name}} {{$value->parent_last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->gender}}</td>
                                        <td>
                                            @if(!empty($value->date_of_birth))
                                                {{date('d-m-Y', strtotime($value->date_of_birth))}}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($value->admission_date))
                                                {{date('d-m-Y', strtotime($value->admission_date))}}
                                            @endif
                                        </td>
                                        <td>{{$value->mobile_number}}</td>
                                        <td>{{$value->marital_status}}</td>
                                        <td>{{$value->address}}</td>
                                        <td>{{$value->permanent_address}}</td>
                                        <td>{{$value->qualification}}</td>
                                        <td>{{$value->experience}}</td>
                                        <td>{{$value->note}}</td>
                                        <td>
                                            @if($value->status == 0)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                                        <td>
                                            <a class="btn" href="{{url('admin/teacher/edit/' . $value->id)}}">
                                                <i data-feather="edit" class="link-icon text-warning"></i>
                                            </a>
                                            <a class="btn" href="{{url('admin/teacher/delete/' . $value->id)}}">
                                                <i data-feather="trash-2" class="link-icon text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div style="padding: 10px; float: right;">
                            {!!$getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()!!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection