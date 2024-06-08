@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        @include('_message')
        <div>
            <h1>My Classes & Subjects</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <h3 class="mb-3">Assign Class Teacher</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Subject Name</th>
                                    <th>Subject Type</th>
                                    <th>My Class Timetable</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php
                            $count = 0;
                            @endphp
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr class="text-center" style="vertical-align: middle;">
                                        <td>{{++$count}}</td>
                                        <td>{{$value->class_name}}</td>
                                        <td>{{$value->subject_name}}</td>
                                        <td>{{$value->subject_type}}</td>
                                        <td>
                                            @php
                                                $ClassSubject = $value->getMyTimeTable($value->class_id, $value->subject_id)
                                            @endphp
                                            @if (!empty($ClassSubject))
                                                {{date('h:i A',strtotime($ClassSubject->start_time))}} <span class="text-primary">To</span> {{date('h:i A',strtotime($ClassSubject->end_time))}}
                                                <br>
                                                <span>Room Number: {{$ClassSubject->room_number}}</span>
                                            @endif
                                        </td>
                                        <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                                        <td>
                                            <a href="{{url('teacher/my_class_subject/class_timetable/'.$value->class_id.'/'. $value->subject_id)}}" class="btn btn-outline-primary">My Class Timetable</a>
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