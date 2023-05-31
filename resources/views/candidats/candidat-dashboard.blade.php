<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Dashboard') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />


    <script src="{{ asset('js/states.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css"> --}}

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


</head>

<body style="background: url(../img/back-blur.png); background-color: #FFF;background-size: cover;">
    <div class="container-fluid bg-white p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="{{ route('welcome') }}"
                class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                {{-- <img src="{{ asset('img/big-logo.png') }}" alt="" style="width: 60px;margin-right: 15px;"> --}}
                <h1 class="m-0 text-muted">HomeHelp</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#" class="nav-item nav-link">Help</a>
                    {{-- <a href="index.html" class="nav-item nav-link active">Home</a> --}}
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">1</a>
                            <a href="job-detail.html" class="dropdown-item">2</a>
                        </div>
                    </div> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa-solid fa-envelope fa-lg"></i></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">MESSAGES HERE</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa-solid fa-bell fa-lg"></i></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">NOTIFICATIONS HERE</a>
                        </div>
                    </div>
                    {{-- <a href="contact.html" class="nav-item nav-link"><i class="fa-solid fa-bell fa-lg"></i></a> --}}
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
                        <a class="dropdown-item disabled" href="#">{{ Auth::user()->username }}</a>
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i>
                            Settings</a>


                        {{-- <a class="dropdown-item" href="login.html" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="mr-1"></i> Logout</a> --}}
                        <style>
                            .btn-logout {
                                width: 150px;
                                height: 50px;
                                /* min-width: 230px; */
                                /* padding: 10px 20px; */
                                /* background: transparent; */
                                cursor: pointer;
                                /* background-color: #4fb8a3; */
                                color: #fff;
                                /* border: 2px solid #4fb8a3; */
                                padding: 5px;
                                border-radius: 6px;
                                box-sizing: border-box;
                                font-size: 11px;
                                font-weight: 600;
                                text-align: center;
                                text-decoration: none;
                                /* margin-left: 5px; */
                                /* margin-right: 5px; */
                                transition: background-color .3s, border-color .3s;
                                box-shadow: 0 2px 10px rgba(54, 54, 54, .2);
                            }
                        </style>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <button class="btn btn-logout btn-danger" type="submit">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        Logout
                                    </button>
                                </div>
                            </div>
                            {{-- <button class="btn-logout" type="submit">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout</button> --}}
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
                        background-color: #4fb8a3;
                        color: #fff;
                        border: 2px solid #4fb8a3;
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
                    Get Verified
                </button>
            </div>
        </nav>
    </div>

    {{-- ! --}}
    <style>
        .search-familly {
            width: 100%;
            height: 60px;
            border: 1px solid rgba(235, 236, 241, 1);
            padding: 0 30px;
            font-size: 15px;
            color: #000000;
            border-radius: 5px;
        }
    </style>
    {{-- ! --}}
    {{-- ! --}}
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
        <div class="collapse navbar-collapse offset-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-gauge"></i> Dashboard <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-message"></i> Conversation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-puzzle-piece"></i> My Ad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> My Account</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0 ">
                <input class="form-control mr-sm-2 search-familly" type="search" placeholder="Search"
                    aria-label="Search">
                {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
            </form>
        </div>
    </nav>
    <div class="container-fluid py-1 bg-dark page-header mb-5">
        <div class="container-fluid my-1 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown offset-2" style="font-size: 1.5em;">Hi {{ Auth::user()->username }},
            </h1>
            <h6 class="display-3 text-white mb-3 animated slideInDown offset-2" style="font-size: 2.5em;"> {{count($annonces)}} new
                childcare jobs available</h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    {{-- ! --}}
    <div class="container-xxl py-5">
        <div class="container">
            {{-- <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1> --}}
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                            href="#tab-1" style="text-decoration: none;">
                            <h6 class="mt-n1 mb-0">Available jobs</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                            href="#tab-2" style="text-decoration: none;">
                            <h6 class="mt-n1 mb-0">Applied jobs</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                            href="#tab-3" style="text-decoration: none;">
                            <h6 class="mt-n1 mb-0">Declined jobs</h6>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        @if (count($annonces) > 0)
                            @foreach ($annonces as $annonce)
                                <div class="job-item p-4 mb-4 bg-light" style="border-radius: 15px;">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            @if($annonce->image)
                                            <img class="flex-shrink-0 img-fluid rounded"
                                              src="/storage/images/{{ $annonce->image }}" alt=""
                                                style="width: 80px; height: 80px;">
                                             @else
                                             <img class="flex-shrink-0 img-fluid rounded"
                                              src="/storage/images/{{ $annonce->image }}" alt=""
                                                style="width: 80px; height: 80px;">
                                             @endif
                                            <div class="text-start ps-4">

                                                {{ $annonce->title_of_offer }}
                                                <br>
                                                <hr>
                                                {{ $annonce->define_needs }}

                                                {{-- <h5 class="mb-3">Software Engineer</h5> --}}
                                                <div class="mt-3">
                                                    <span class="text-truncate me-3"><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>{{$annonce->country}} ,
                                                            {{$annonce->currency_coin}}</span>
                                                    <span class="text-truncate me-3"><i
                                                            class="far fa-clock text-primary me-2"></i>{{$annonce->type_of_employment}}</span>
                                                    <span class="text-truncate me-0"><i
                                                            class="far fa-money-bill-alt text-primary me-2"></i>{{$annonce->monthly_salary}}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-light btn-square me-3" href=""><i
                                                        class="far fa-heart text-primary"></i></a>
                                                <a class="btn btn-primary" href="">Apply Now</a>
                                            </div>
                                            <small class="text-truncate"><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>Date Line: 
                                                     {{\Carbon\Carbon::parse($annonce->expected_start_date)->format('d M, Y')}}
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                {{-- <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a> --}}
                            @endforeach
                        @endif
                    </div>
                    {{-- ! --}}
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg"
                                        alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Software Engineer</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                            USA</span>
                                        <span class="text-truncate me-3"><i
                                                class="far fa-clock text-primary me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i
                                                class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                            $456</span>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i
                                                class="far fa-heart text-primary"></i></a>
                                        <a class="btn btn-primary" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i
                                            class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                        2045</small>
                                </div>
                            </div>
                        </div>

                        {{-- <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a> --}}
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg"
                                        alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">Software Engineer</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>New York,
                                            USA</span>
                                        <span class="text-truncate me-3"><i
                                                class="far fa-clock text-primary me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i
                                                class="far fa-money-bill-alt text-primary me-2"></i>$123 -
                                            $456</span>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href=""><i
                                                class="far fa-heart text-primary"></i></a>
                                        <a class="btn btn-primary" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><i
                                            class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan,
                                        2045</small>
                                </div>
                            </div>
                        </div>
                        {{-- <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ! --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #4fb8a3;">
        <div class="collapse navbar-collapse offset-4" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="#">Available jobs <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Applied jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Declined jobs</a>
                </li>

            </ul>
        </div>
    </nav> --}}

    {{-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-gauge"></i> Dashboard <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-message"></i> Conversation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-puzzle-piece"></i> My Ad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> My Account</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> --}}
  
</body>

</html>
