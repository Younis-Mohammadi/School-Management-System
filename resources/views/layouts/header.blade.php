<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Top<span>DEV</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            @if (Auth::user()->user_type == 1)
                <li class="nav-item">
                    <a href="{{url('admin/dashboard')}}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/admin/list')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Admin</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/teacher/list')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Teacher</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/student/list')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Student</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/parent/list')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Parent</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/class/list')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Class</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/subject/list')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Subject</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/assign_subject/list')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Assign Subject</span>
                    </a>
                </li>
            @elseif(Auth::user()->user_type == 2)
                <li class="nav-item">
                    <a href="{{url('teacher/dashboard')}}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
            @elseif(Auth::user()->user_type == 3)
                <li class="nav-item">
                    <a href="{{url('student/dashboard')}}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
            @elseif(Auth::user()->user_type == 4)
                <li class="nav-item">
                    <a href="{{url('parent/dashboard')}}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('parent/my_student')}}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">My Student</span>
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item" href="../demo1/dashboard.html">
                <img src="{{url('assets/images/screenshots/light.jpg')}}" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item active" href="../demo2/dashboard.html">
                <img src="{{url('assets/images/screenshots/dark.jpg')}}" alt="light theme">
            </a>
        </div>
    </div>
</nav>
<!-- partial -->

<div class="page-wrapper">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar">
        <a href="#" class="sidebar-toggler">
            <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span
                            class="ms-1 me-1 d-none d-md-inline-block">English</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us"
                                id="us"></i> <span class="ms-1"> English </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr"
                                id="fr"></i> <span class="ms-1"> French </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de"
                                id="de"></i> <span class="ms-1"> German </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt"
                                id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es"
                                id="es"></i> <span class="ms-1"> Spanish </span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="mail"></i>
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                            <p>9 New Messages</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="p-1">
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Leonardo Payne</p>
                                        <p class="tx-12 text-muted">Project status</p>
                                    </div>
                                    <p class="tx-12 text-muted">2 min ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Carl Henson</p>
                                        <p class="tx-12 text-muted">Client meeting</p>
                                    </div>
                                    <p class="tx-12 text-muted">30 min ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Jensen Combs</p>
                                        <p class="tx-12 text-muted">Project updates</p>
                                    </div>
                                    <p class="tx-12 text-muted">1 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Amiah Burton</p>
                                        <p class="tx-12 text-muted">Project deatline</p>
                                    </div>
                                    <p class="tx-12 text-muted">2 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div class="me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-4">
                                        <p>Yaretzi Mayo</p>
                                        <p class="tx-12 text-muted">New record</p>
                                    </div>
                                    <p class="tx-12 text-muted">5 hrs ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="bell"></i>
                        <div class="indicator">
                            <div class="circle"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                            <p>6 New Notifications</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="p-1">
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div
                                    class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="gift"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>New Order Recieved</p>
                                    <p class="tx-12 text-muted">30 min ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div
                                    class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="alert-circle"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>Server Limit Reached!</p>
                                    <p class="tx-12 text-muted">1 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div
                                    class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                        alt="userr">
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>New customer registered</p>
                                    <p class="tx-12 text-muted">2 sec ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div
                                    class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="layers"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>Apps are ready for update</p>
                                    <p class="tx-12 text-muted">5 hrs ago</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                <div
                                    class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="download"></i>
                                </div>
                                <div class="flex-grow-1 me-2">
                                    <p>Download completed</p>
                                    <p class="tx-12 text-muted">6 hrs ago</p>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                        <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                            <div class="mb-3">
                                <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                            </div>
                            <div class="text-center">
                                <p class="tx-16 fw-bolder">{{Auth::user()->name}}</p>
                                <p class="tx-12 text-muted">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <ul class="list-unstyled p-1">
                            @if (Auth::user()->user_type == 1)
                                <li class="dropdown-item py-2">
                                    <a href="{{url('admin/change_password')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="dropdown-item py-2">
                                    <a href="{{url('admin/account')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="edit"></i>
                                        <span>Edit Profile Account</span>
                                    </a>
                                </li>
                            @elseif(Auth::user()->user_type == 2)
                                <li class="dropdown-item py-2">
                                    <a href="{{url('teacher/change_password')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="dropdown-item py-2">
                                    <a href="{{url('teacher/account')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="edit"></i>
                                        <span>Edit Profile Account</span>
                                    </a>
                                </li>
                            @elseif(Auth::user()->user_type == 3)
                                <li class="dropdown-item py-2">
                                    <a href="{{url('student/change_password')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="dropdown-item py-2">
                                    <a href="{{url('student/account')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="edit"></i>
                                        <span>Edit Profile Account</span>
                                    </a>
                                </li>
                            @elseif(Auth::user()->user_type == 4)
                                <li class="dropdown-item py-2">
                                    <a href="{{url('parent/change_password')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="dropdown-item py-2">
                                    <a href="{{url('parent/account')}}" class="text-body ms-0">
                                        <i class="me-2 icon-md" data-feather="edit"></i>
                                        <span>Edit Profile Account</span>
                                    </a>
                                </li>
                            @endif

                            <li class="dropdown-item py-2">
                                <a href="javascript:;" class="text-body ms-0">
                                    <i class="me-2 icon-md" data-feather="repeat"></i>
                                    <span>Switch User</span>
                                </a>
                            </li>
                            <li class="dropdown-item py-2">
                                <a href="{{url('/logout')}}" class="text-body ms-0">
                                    <i class="me-2 icon-md" data-feather="log-out"></i>
                                    <span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>