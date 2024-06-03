<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <title>{{!empty($header_title) ? $header_title : ''}} School</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/flatpickr/flatpickr.min.css')}}">
    <!-- <link rel="stylesheet" href="{{url('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}"> -->
    <link rel="stylesheet" href="{{url('assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/demo2/style.css')}}">
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </div>
    </div>
    <script src="{{url('assets/vendors/core/core.js')}}"></script>
    <script src="{{url('assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{url('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{url('assets/js/template.js')}}"></script>
    <script src="{{url('assets/js/dashboard-dark.js')}}"></script>
    <!-- <script src="{{url('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{url('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script> -->
    <script src="{{url('assets/js/data-table.js')}}"></script>
    @yield('script')
</body>

</html>