@extends('layouts.app')
@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Add New Assign Class Teacher</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Class Name</label>
                                <select name="class_id" id="class_id" class="form-control form-select" required>
                                    @foreach ($getClass as $class)
                                        <option value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Teacher Name</label>
                                @foreach ($getTeacher as $teacher)
                                    <div>
                                        <label style="font-weight: normal;">
                                            <input type="checkbox" name="teacher_id[]" value="{{$teacher->id}}">
                                            {{$teacher->name}} {{$teacher->last_name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" id="status" class="form-control form-select">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Save
                                </button>
                                <a href="{{url('admin/assign_subject/list')}}" style="padding: 3px 10px;" type="button"
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