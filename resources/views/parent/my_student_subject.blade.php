@extends('layouts.app')
@section('content')

<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        @include('_message')
        <div>
            <h1>Student Subject <span class="text-primary">( {{$getUser->name}} - {{$getUser->last_name}} )</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <h3 class="mb-3">Student Subjects</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Subject Name</th>
                                    <th>Subject Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $count = 0 ?>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr class="text-center">
                                        <td>{{++$count}}</td>
                                        <td>{{$value->subject_name}}</td>
                                        <td>{{$value->subject_type}}</td>
                                        <td>
                                            <a href="{{url('parent/my_student/subject/class_timetable/'.$value->class_id.'/'. $value->subject_id)}}" class="btn btn-outline-primary">My Class Timetable</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection