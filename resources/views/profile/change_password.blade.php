@extends('layouts.app')
@section('content')

<div class="page-content">
    @include('_message')
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Change Password</h1>
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
                                <label class="form-label">Old Password</label>
                                <input type="password" class="form-control mb-4 mb-md-0" name="old_password"
                                    placeholder="Old Password" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control mb-4 mb-md-0" name="new_password"
                                    placeholder="Class Name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 d-flex justify-content-center gap-1 align-items-center mt-4">
                                <button type="submit" style="padding: 3px 10px;" title="Save Admin"
                                    class="btn btn-inverse-success">
                                    <i data-feather="plus-circle"></i> Update
                                </button>
                                <a href="{{url('admin/dashboard')}}" style="padding: 3px 10px;" type="button"
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