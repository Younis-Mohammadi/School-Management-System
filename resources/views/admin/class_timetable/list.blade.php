@extends('layouts.app')
@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>Class Timetable</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="get">
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
                                @foreach ($week as $value)
                                    <tr class="text-center">
                                        <th>{{$value['week_name']}}</th>
                                        <td>
                                            <input type="time" name="start_time" class="form-control">
                                        </td>
                                        <td>
                                            <input type="time" name="end_time" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="room_number" class="form-control">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
    
                        <div style="padding: 10px; float: right;">
                            <button class="btn btn-inverse-primary">Submit</button>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
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