@extends('layouts.app')
@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Update Subject</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Subject Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0" name="name"
                                    placeholder="Subject Name" value="{{$getRecord->name}}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Subject Type</label>
                                <select name="type" id="type" class="form-control form-select">
                                    <option value="">Select Type</option>
                                    <option {{($getRecord->type == 'theory' ? 'selected' : '')}} value="theory">Theory
                                    </option>
                                    <option {{($getRecord->type == 'practical' ? 'selected' : '')}} value="practical">
                                        Practical</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" id="status" class="form-control form-select">
                                    <option {{($getRecord->status == 0 ? 'selected' : '')}} value="0">Active</option>
                                    <option {{($getRecord->status == 1 ? 'selected' : '')}} value="1">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Update
                                </button>
                                <a href="{{url('admin/subject/list')}}" style="padding: 3px 10px;" type="button"
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