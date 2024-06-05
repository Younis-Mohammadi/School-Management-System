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
                                    <option value="">Select Class</option>
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