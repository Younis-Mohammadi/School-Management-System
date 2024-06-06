@extends('layouts.app')
@section('content')
<div class="page-content">
    @include('_message')
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Class Timetable</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="get" action="">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-label">Class Name</label>
                                <select class="form-control form-select getClass" name="class_id" required>
                                    <option value="">Select Class</option>
                                    @foreach ($getClass as $class)
                                        <option {{(Request::get('class_id') == $class->id) ? 'selected' : ''}} value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Subject Name</label>
                                <select class="form-control form-select getSubject" name="subject_id" required>
                                    <option value="">Select Subject</option>
                                    @if (!empty($getSubject))
                                        @foreach ($getSubject as $subject)
                                            <option {{(Request::get('subject_id') == $subject->subject_id) ? 'selected' : ''}} value="{{$subject->subject_id}}">{{$subject->subject_name}}</option>
                                        @endforeach 
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-inverse-primary"
                                    style="margin-top: 22px;">Search</button>
                                <a href="{{url('admin/class_timetable/list')}}" class="btn btn-inverse-danger"
                                    style="margin-top: 22px;">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (!empty(Request::get('class_id')) && !empty(Request::get('subject_id')))
        <form action="{{url('admin/class_timetable/add')}}" method="post">
            @csrf
            <input type="hidden" name="subject_id" value="{{Request::get('subject_id')}}" >
            <input type="hidden" name="class_id" value="{{Request::get('class_id')}}" >
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center p-4">
                            <h3>Class Timetable</h3>
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
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($week as $value)
                                            <tr class="text-center">
                                                <th>
                                                    <input type="hidden" name="timetable[{{$i}}][week_id]" value="{{$value['week_id']}}">
                                                    {{$value['week_name']}}
                                                </th>
                                                <td>
                                                    <input type="time" name="timetable[{{$i}}][start_time]" value="{{$value['start_time']}}" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="time" name=" timetable[{{$i}}][end_time]" value="{{$value['end_time']}}" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="timetable[{{$i}}][room_number]" value="{{$value['room_number']}}" class="form-control">
                                                </td>
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <div style="padding: 10px; display: flex;justify-content: center;">
                                    <button class="btn btn-inverse-primary">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $('.getClass').change(function() {
            var class_id = $(this).val();
            $.ajax({
                url: "{{url('admin/class_timetable/get_subject')}}",
                type: "POST",
                data: {
                    _token: "{{csrf_token()}}",
                    class_id: class_id,
                },
                dataType: "json",
                success: function(response) {
                    $('.getSubject').html(response.html);
                },
            });
        });
    </script>
@endsection