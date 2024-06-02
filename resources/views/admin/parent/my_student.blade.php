@extends('layouts.app')
@section('content')

<div class="page-content">

    @include('_message')
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Parent Student List</h1>
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
                                <label class="form-label">Student ID</label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{Request::get('id')}}"
                                    name="id" placeholder="Student ID">
                            </div>
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
                                <button type="submit" class="btn btn-inverse-primary"
                                    style="margin-top: 22px;">Search</button>
                                <a href="{{url('admin/parent/my-student/' . $parent_id)}}"
                                    class="btn btn-inverse-danger" style="margin-top: 22px;">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin flex-column stretch-card">
            @if (!empty($getSearchStudent))
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center p-4">
                        <h3 class="mb-3">Student List</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Profile Picture</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Parent Name</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($getSearchStudent as $value)
                                        <tr class="text-center" style="vertical-align: middle;">
                                            <td>{{$value->id}}</td>
                                            <td>
                                                @if (!empty($value->getProfile()))
                                                    <img src="{{$value->getProfile()}}"
                                                        style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                                @endif
                                            </td>
                                            <td>{{$value->name}} {{$value->last_name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->parent_name}}</td>
                                            <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                                            <td>
                                                <a class="btn btn-outline-light"
                                                    href="{{url('admin/parent/assign_student_parent/' . $value->id . '/' . $parent_id)}}">
                                                    Add Student To Parent <i data-feather="plus-circle"
                                                        class="link-icon text-success"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div style="padding: 10px; float: right;">
                            </div>

                        </div>
                    </div>
                </div>
            @endif  

          <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <h3 class="mb-3">Parent Student List</h3>
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
                                    <th>Gender</th>
                                    <th>Mobile Number</th>
                                    <th>Occupation</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
$count = 0;
                            ?>
                            <tbody>
                            </tbody>
                        </table>

                        <div style="padding: 10px; float: right;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection