@extends('layouts.app')
@section('content')
<div class="page-content">
    @include('_message')
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>My Timetable</h1>
        </div>
    </div>
        <div class="row">
            @foreach ($getRecord as $value)
                <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center p-4">
                                <h3>{{$value['subject_name']}}</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Week</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Room Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($value['week'] as $valueW)
                                                <tr class="text-center">
                                                    <td>{{$valueW['week_name']}}</td>
                                                    <td>{{!empty($valueW['start_time']) ? date('h:i A', strtotime($valueW['start_time'])) : ''}}</td>
                                                    <td>{{!empty($valueW['end_time']) ? date('h:i A', strtotime($valueW['end_time'])) : ''}}</td>
                                                    <td>{{$valueW['room_number']}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
    
@endsection