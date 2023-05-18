<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
        integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_acceuil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
{{-- 
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" /> --}}

   
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="{{ route('dashboard') }}" class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo">
                </a>
                <a href="{{ route('dashboard') }}" class="logo logo-small">
                    <img src="{{ asset('img/logo-small.png') }}" alt="Logo" width="30" height="30">
                </a>
                <a href="javascript:void(0);" id="toggle_btn">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
            </div>




            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link pr-0" data-toggle="dropdown">
                        <i data-feather="bell"></i> <span class="badge badge-pill"></span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="{{ asset('img/avatar-02.jpg') }}">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Brian Johnson</span>
                                                    paid the invoice <span class="noti-title">#DF65485</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="{{ asset('img/avatar-03.jpg') }}">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Marie Canales</span>
                                                    has accepted your estimate <span
                                                        class="noti-title">#GTR458789</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <div class="avatar avatar-sm">
                                                <span class="avatar-title rounded-circle bg-primary-light"><i
                                                        class="far fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">New user
                                                        registered</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt=""
                                                    src="{{ asset('img/avatar-04.jpg') }}">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Barbara Moore</span>
                                                    declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <div class="avatar avatar-sm">
                                                <span class="avatar-title rounded-circle bg-info-light"><i
                                                        class="far fa-comment"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">You have received a
                                                        new message</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{ asset('img/profile.png') }}" alt="">
                            <span class="status online"></span>
                        </span>
                        <span>Badour Mohcine</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i>
                            Settings</a>
                        <a class="dropdown-item" href="login.html" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="mr-1"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
            <div class="dropdown mobile-user-menu show">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right ">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html" href="login.html" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div class="sidebar-contents">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <div class="mobile-show">
                            <div class="offcanvas-menu">
                                <div class="user-info align-center bg-theme text-center">
                                    <span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
                                    <a href="javascript:void(0)" class="d-block menu-style text-white">
                                        <div class="user-avatar d-inline-block mr-3">
                                            <img src="{{ asset('img/avatar-18jpg') }}" alt="user avatar"
                                                class="rounded-circle" width="50">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-input">
                                <div class="top-nav-search">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Search here">
                                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li class="@yield('activate-admin')">
                                <a href="{{ route('dashboard') }}"><img src="{{ asset('img/home.svg') }}" alt="sidebar_img">
                                    <span>Dashboard</span></a>
                            </li>
                            {{-- <li {{'admin.famille' == request()->path() ? 'active':''}}> --}}
                                <li class="@yield('activate-family')">
                                    
                                <a href="{{ route('admin.famille') }}"><img src="{{ asset('img/employee.svg') }}"
                                        alt="sidebar_img"><span> Family</span></a>
                            </li>
                            <li class="@yield('activate-candidat')">
                                <a href="{{ route('admin.candidat') }}"><img src="{{ asset('img/company.svg') }}" alt="sidebar_img">
                                    <span> Candidat</span></a>
                            </li>
                            <li class="@yield('activate-abonnements')">
                                <a href="{{ route('admin.abonnements') }}"><img src="{{ asset('img/calendar.svg') }}"
                                        alt="sidebar_img"> <span>Abonnement</span></a>
                            </li>
                            <li>
                                <a href="leave.html"><img src="{{ asset('img/leave.svg') }}" alt="sidebar_img">
                                    <span>Leave</span></a>
                            </li>
                            <li>
                                <a href="review.html"><img src="{{ asset('img/review.svg') }}"
                                        alt="sidebar_img"><span>Review</span></a>
                            </li>
                            <li>
                                <a href="report.html"><img src="{{ asset('img/report.svg') }}"
                                        alt="sidebar_img"><span>Report</span></a>
                            </li>
                            <li>
                                <a href="manage.html"><img src="{{ asset('img/manage.svg') }}" alt="sidebar_img">
                                    <span>Manage</span></a>
                            </li>
                            <li>
                                <a href="{{route('staff.index')}}"><img src="{{ asset('img/settings.svg') }}"
                                        alt="sidebar_img"><span>Settings</span></a>
                            </li>
                            <li>
                                <a href="profile.html"><img src="{{ asset('img/profile.svg') }}" alt="sidebar_img">
                                    <span>Profile</span></a>
                            </li>
                        </ul>
                        <ul class="logout">
                            <li>
                                <a href="profile.html" href="login.html" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><img
                                        src="{{ asset('img/logout.svg') }}" alt="sidebar_img"><span>Log
                                        out</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


       @yield('content') 


    </div>






    
    
    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('js/feather.min.js') }}"></script>
    
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    
    <script src="{{ asset('plugins/apexchart/apexcharts.min.js') }}"></script>
    
    <script src="{{ asset('plugins/apexchart/chart-data.js') }}"></script>
    
    <script src="{{ asset('js/select2.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>


    {{-- NEW SCRIPT --}}
    
</body>

</html>
