@extends('layouts.app')
@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Edit Assign Subject</h1>
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
                                        <option {{($getRecord->class_id == $class->id) ? 'selected' : ''}}
                                            value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Subject Name</label>
                                <select name="subject_id" id="subject_id" class="form-control form-select" required>
                                    <option value="">Select Object</option>
                                    @foreach ($getSubject as $subject)
                                        <option {{($getRecord->subject_id == $subject->id) ? 'selected' : ''}}
                                            value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" id="status" class="form-control form-select">
                                    <option {{($getRecord->status == 0) ? 'selected' : ''}} value="0">Active</option>
                                    <option {{($getRecord->status == 1) ? 'selected' : ''}} value="1">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Update
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