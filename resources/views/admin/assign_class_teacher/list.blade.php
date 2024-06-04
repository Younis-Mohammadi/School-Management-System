@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        @include('_message')
        <div>
            <h1>Assign Class Teacher</h1>
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
                                            <a class="btn" href="{{url('admin/assign_subject/edit_single/' . $value->id)}}"
                                                title="Single Edit">
                                                <i data-feather="edit-2" class="link-icon text-info"></i>
                                            </a>
                                            <a class="btn" href="{{url('admin/assign_subject/delete/' . $value->id)}}"
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