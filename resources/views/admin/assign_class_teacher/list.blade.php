@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        @include('_message')
        <div>
            <h1>Assign Class Teacher ({{$getRecord->total()}})</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="get">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <label class="form-label">Class Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0" value="{{Request::get('class_name')}}"
                                    name="class_name" placeholder="Class Name">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Teacher Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0"
                                    value="{{Request::get('teacher_name')}}" name="teacher_name" placeholder="Teacher Name">
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
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" value="">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-inverse-primary"
                                    style="margin-top: 22px;">Search</button>
                                <a href="{{url('admin/assign_class_teacher/list')}}" class="btn btn-inverse-danger"
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
                    <h3 class="mb-3">Assign Class Teacher</h3>
                    <a href="{{url('admin/assign_class_teacher/add')}}" class="btn btn-outline-light">Add New Assign
                        Class Teacher</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Teacher Name</th>
                                    <th>Status</th>
                                    <th>Created By</th>
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
                                        <td>{{$value->class_name}}</td>
                                        <td>{{$value->teacher_name}}</td>
                                        <td>
                                            @if($value->status == 0)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{$value->created_by_name}}</td>
                                        <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                                        <td>
                                            <a class="btn" href="{{url('admin/assign_class_teacher/edit/' . $value->id)}}"
                                                title="Multi Edit">
                                                <i data-feather="edit" class="link-icon text-warning"></i>
                                            </a>
                                            <a class="btn" href="{{url('admin/assign_class_teacher/edit_single/' . $value->id)}}"
                                                title="Single Edit">
                                                <i data-feather="edit-2" class="link-icon text-info"></i>
                                            </a>
                                            <a class="btn" href="{{url('admin/assign_class_teacher/delete/' . $value->id)}}"
                                                title="Delete Row">
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