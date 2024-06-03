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
                    <a href="{{url('admin/assign_class_teacher/add')}}" class="btn btn-outline-light">Add New Assign Class Teacher</a>
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