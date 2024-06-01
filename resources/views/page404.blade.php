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
    <title>404 page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{url('assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/demo2/style.css')}}">
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <style>
        .buttonI:hover {
            text-decoration: none;
        }

        #buttonI:hover {
            transform: translateX(-10px);
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
                        <img src="{{url('assets/images/others/404.svg')}}" class="img-fluid mb-2" alt="404">
                        <h1 class="fw-bolder mb-22 mt-2 tx-80 text-muted">404</h1>
                        <h4 class="mb-2">Page Not Found</h4>
                        <h6 class="text-muted text-center">
                            Oopps!! The page you were looking for doesn't exist.
                            <br>
                            <h2 class="mb-3">{{ $part }}</h2>
                        </h6>
                        <a href="{{url($route)}}" class="buttonI" style="text-decoration: underline;"><i
                                data-feather="arrow-left-circle" id="buttonI" class="link-icon text-primary"
                                style="transition: .5s;"></i>
                            Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('assets/vendors/core/core.js')}}"></script>
    <script src="{{url('assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{url('assets/js/template.js')}}"></script>
</body>

</html>