@extends('layouts.app')
@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        @include('_message')
        <div>
            <h1>Student List (Total :{{$getRecord->total()}})</h1>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="get">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{Request::get('name')}}"
                                    name="name" placeholder="Name">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="{{Request::get('email')}}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" value="{{Request::get('date')}}">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-inverse-primary"
                                    style="margin-top: 22px;">Search</button>
                                <a href="{{url('admin/admin/list')}}" class="btn btn-inverse-danger"
                                    style="margin-top: 22px;">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <h3 class="mb-3">Students</h3>
                    <a href="{{url('admin/student/add')}}" class="btn btn-outline-light">Add Student</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Profile Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Admission Number</th>
                                    <th>Roll Number</th>
                                    <th>Class</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Caste</th>
                                    <th>Religion</th>
                                    <th>Mobile Number</th>
                                    <th>Admission Date</th>
                                    <th>Blood Group</th>
                                    <th>Height</th>
                                    <th>Weight</th>
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
                                    <tr class="text-center">
                                        <td>{{++$count}}</td>
                                        <td>
                                            @if (!empty($value->getProfile()))
                                                <img src="{{$value->getProfile()}}"
                                                    style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                            @endif
                                        </td>
                                        <td>{{$value->name}} {{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->admission_number}}</td>
                                        <td>{{$value->roll_number}}</td>
                                        <td>{{$value->class_name}}</td>
                                        <td>{{$value->gender}}</td>
                                        <td>
                                            @if(!empty($value->date_of_birth))
                                                {{date('d-m-Y', strtotime($value->date_of_birth))}}
                                            @endif
                                        </td>
                                        <td>{{$value->caste}}</td>
                                        <td>{{$value->religion}}</td>
                                        <td>{{$value->mobile_number}}</td>
                                        <td>
                                            @if(!empty($value->admission_date))
                                                {{date('d-m-Y', strtotime($value->admission_date))}}
                                            @endif
                                        </td>
                                        <td>{{$value->blood_group}}</td>
                                        <td>{{$value->height}}</td>
                                        <td>{{$value->weight}}</td>
                                        <td>
                                            @if($value->status == 0)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                                        <td>
                                            <a class="btn" href="{{url('admin/student/edit/' . $value->id)}}">
                                                <i data-feather="edit" class="link-icon text-warning"></i>
                                            </a>
                                            <a class="btn" href="{{url('admin/student/delete/' . $value->id)}}">
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