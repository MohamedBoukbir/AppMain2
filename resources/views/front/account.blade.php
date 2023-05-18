<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/new-animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new-owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/new-bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/new-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-login.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    {{-- @livewireStyles --}}
</head>

<body style="background-color: #FFF">
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                {{-- <img src="{{ asset('img/big-logo.png') }}" alt="" style="width: 60px;margin-right: 15px;"> --}}
                <h1 class="m-0 text-muted">HomeHelp</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    {{-- <a href="index.html" class="nav-item nav-link active">Home</a> --}}
                    <a href="#" class="nav-item nav-link">Help</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">1</a>
                            <a href="job-detail.html" class="dropdown-item">2</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">1</a>
                            <a href="testimonial.html" class="dropdown-item">2</a>
                            <a href="404.html" class="dropdown-item">3</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Messages</a>
                </div>
                {{-- <a href="{{ route('signup') }}" class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-lg-block"><i
                        class="fa fa-user me-3"></i>Sign Up</a> --}}
                {{-- <a href="{{ route('signin') }}" class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-lg-block ">Sign
                    In<i class="fa fa-arrow-right ms-3"></i></a> --}}
                <style>
                    li {
                        list-style-type: none;
                    }
                </style>
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{ asset('img/profile.png') }}" alt="" style="width: 30px">
                            <span class="status online"></span>
                        </span>
                        {{-- <span>{{ Auth::user()->username}}</span> --}}
                        {{-- <span>username</span> --}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item disabled" href="#">{{Auth::user()->username }}</a>
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i>
                            Settings</a>


                        {{-- <a class="dropdown-item" href="login.html" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="mr-1"></i> Logout</a> --}}

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                            
                                    <button type="submit"> Logout</button>
                                </form>     
                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}
                    </div>
                </li>
                <style>
                    .btn-upgrade {
                        width: 10%;
                        height: 50px;
                        /* min-width: 230px; */
                        /* padding: 10px 20px; */
                        background: transparent;
                        cursor: pointer;
                        background-color: #f49758;
                        color: #fff;
                        border: 2px solid #f49758;
                        padding: 5px;
                        border-radius: 6px;
                        box-sizing: border-box;
                        font-size: 11px;
                        font-weight: 600;
                        text-align: center;
                        text-decoration: none;
                        transition: background-color .3s, border-color .3s;
                        margin: 15px;
                        box-shadow: 0 2px 10px rgba(54, 54, 54, .2);
                    }
                </style>
                <button type="button" class="btn-upgrade">
                    Upgrade to Premium
                </button>
            </div>
        </nav>

        <style>
            .menu {
                display: block;
                position: flex;
                height: 80px;
                z-index: 99;
                width: 100%;
                border-bottom: 1px solid #dbe5ea;
            }

            .menu-list {
                display: flex;
                padding: 30px 0;
                margin: auto;
                max-width: 1060px;
                width: 100%;
            }

            .menu-list-item {
                font-weight: 600;
                font-family: Nunito, Arial, Helvetica, sans-serif;
                font-size: 14px;
                line-height: 22px;
                margin-right: 30px;
                color: #144862;
                display: flex;
                align-items: center;
            }

            .menu-item-link {
                text-decoration: none;
                display: flex;
                flex-flow: row nowrap;
            }

            .menu-item-label {
                text-decoration: none;
                color: #9cb2bd;
            }

            .menu-item-icon {
                margin-top: 1px;
                margin-right: 10px;
                position: relative;
                fill: #144862 !important;
                width: 16px;
                height: 16px;
                color: #9cb2bd;
            }

            .menu-item-icon,.menu-item-link :hover{
               
                color: #144862!important;
            }

            .menu-list-item:last-child {
                margin-right: 0;
            }

            .item-search {
                margin-left: auto;
            }
        </style>

        <div class="menu">
            <div class="menu-list">
                <div class="menu-list-item">
                    <a href="{{ route('account-dashboard') }}" class="menu-item-link">
                        <span class="menu-item-icon"><i class='bx bxs-dashboard'></i></span>
                        {{-- <p class="menu-item-label">Dashboard</p> --}}
                        @yield('item-list-1')
                    </a>
                </div>

                <div class="menu-list-item">
                    <a href="{{ route('account-applications') }}" class="menu-item-link activated">
                        <span class="menu-item-icon"><i class='bx bxs-user'></i></span>
                        {{-- <p class="menu-item-label ">New Applications</p> --}}
                        @yield('item-list-2')
                    </a>
                </div>
                <div class="menu-list-item">
                    <a href="{{ route('account-conversation') }}" class="menu-item-link">
                        <span class="menu-item-icon"><i class='bx bxs-message'></i></span>
                        {{-- <p class="menu-item-label">Conversations</p> --}}
                        @yield('item-list-3')
                    </a>
                </div>

                <div class="menu-list-item ">
                    <a href="{{ route('account-saved-profiles') }}" class="menu-item-link">
                        <span class="menu-item-icon "><i class='bx bxs-like'></i></span>
                        {{-- <p class="menu-item-label">Saved profiles</p> --}}
                        @yield('item-list-4')
                    </a>
                </div>

                <div class="menu-list-item item-search">
                    <a href="{{route('users')}}" class="menu-item-link">
                        <span class="menu-item-icon" style="color: green;"><i class='bx bx-search-alt-2'></i></span>
                        <p class="menu-item-label" style="color: green;">Find Domestic Helpers</p>
                    </a>
                </div>


            </div>
        </div>


       @yield('content')
       
    </div>



    {{-- @livewireScripts --}}
</body>

</html>
