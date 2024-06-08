@extends('layouts.app')
@section('content')

<div class="page-content">

    @include('_message')
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div>
            <h1>My Students</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin flex-column stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <h3 class="mb-3">My Students</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Profile Picture</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Admission Number</th>
                                    <th>Roll Number</th>
                                    <th>Class</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Caste</th>
                                    <th>Religion</th>
                                    <th>Mobile Number</th>
                                    <th>Admission Date</th>
                                    <th>Blood Group</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $count = 0; ?>
                            <tbody>
                                @if($getRecord != null)

                                    @foreach ($getRecord as $value)
                                        <tr class="text-center" style="vertical-align: middle;">
                                            <td>{{++$count}}</td>
                                            <td>
                                                @if (!empty($value->getProfile()))
                                                    <img src="{{$value->getProfile()}}"
                                                        style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                                @endif
                                            </td>
                                            <td>{{$value->name}} {{$value->last_name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->admission_number}}</td>
                                            <td>{{$value->roll_number}}</td>
                                            <td>{{$value->class_name}}</td>
                                            <td>{{$value->gender}}</td>
                                            <td>
                                                @if(!empty($value->date_of_birth))
                                                    {{date('d-m-Y', strtotime($value->date_of_birth))}}
                                                @endif
                                            </td>
                                            <td>{{$value->caste}}</td>
                                            <td>{{$value->religion}}</td>
                                            <td>{{$value->mobile_number}}</td>
                                            <td>
                                                @if(!empty($value->admission_date))
                                                    {{date('d-m-Y', strtotime($value->admission_date))}}
                                                @endif
                                            </td>
                                            <td>{{$value->blood_group}}</td>
                                            <td>{{$value->height}}</td>
                                            <td>{{$value->weight}}</td>
                                            <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                                            <td>
                                                <a class="btn btn-outline-light" href="{{url('parent/my_student/subject/' . $value->id)}}">
                                                    Subject <i class="link-icon fas fa-book text-primary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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