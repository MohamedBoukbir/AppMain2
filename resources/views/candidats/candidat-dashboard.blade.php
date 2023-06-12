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


    {{-- !REPORT --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> --}}
    {{-- !END REPORT --}}


    {{-- ! --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- ! --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>

<body style="background: url(../img/back-blur.png); background-color: #FFF;background-size: cover;">
    <div class="container-fluid bg-white p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="{{ route('welcome') }}"
                class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                {{-- <img src="{{ asset('img/big-logo.png') }}" alt="" style="width: 60px;margin-right: 15px;"> --}}
                <h3 class="m-0 text-primary" style="text-transform: uppercase;">HomeWorker</h3>
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
                        {{-- ! image --}}


                        @if (Auth::user()->image)
                            <span class="user-img">
                                <img class="rounded-circle" src="/storage/{{ Auth::user()->image }}" alt=""
                                    style="width: 40px;height: 40px;">
                                <span class="status online"></span>
                            </span>
                        @else
                            <span class="user-img">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->username) }}"
                                    alt="" style="width: 40px;height: 40px;">
                                <span class="status online"></span>
                            </span>
                        @endif
                        {{-- ! end image --}}
                        {{-- <span>{{ Auth::user()->username}}</span> --}}
                        {{-- <span>username</span> --}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item disabled" href="#">{{ Auth::user()->username }}</a>
                        <a class="dropdown-item" href="{{ route('candidats.edit', Auth::user()->id) }}"><i
                                data-feather="user" class="mr-1"></i>
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
                        {{-- !logout --}}
                        {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <button class="btn btn-logout btn-danger" type="submit">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        Logout
                                    </button>
                                </div>
                            </div> --}}
                        {{-- <button class="btn-logout" type="submit">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout</button> --}}
                        {{-- </form> --}}

                        <a class="dropdown-item" href="login.html" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
                            {{-- !image logout --}}
                            <i data-feather="log-out" class="mr-1"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        {{-- !logout --}}
                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}
                    </div>
                </li>
                <style>
                    .btn-upgrade {
                        width: 15%;
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
                {{-- ! active --}}

                <button href="#" class="btn-upgrade">
                    Get verified
                </button>
                {{-- @if (Auth::user()->candidat_status == 'Active')
                
                <a  href="#" style="background-color: green;  font-size: 16px;" class="btn-upgrade">
                 Active
                </a>
            @else
            <a href="#" type="button"   style="background-color: red; font-size: 16px;" class="btn-upgrade">
              Pause
            </a>
            @endif --}}

                {{-- ! non  active --}}
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
                    <a class="nav-link" href="{{ route('chat') }}"><i class="fa-solid fa-message"></i>
                        Conversation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-puzzle-piece"></i> My Ad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('candidats.edit', Auth::user()->id) }}"><i
                            class="fa-solid fa-user"></i> My Account</a>
                </li>
            </ul>
            {{-- <form action="{{ route('candidat.search') }}" method="POST" class="form-inline my-2 my-lg-0 ">
                @csrf
                <input class="form-control mr-sm-2 search-familly" type="search" name="title_of_offer"
                    id="title_of_offer" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <div id="user_list">
                </div>
            </form> --}}
        </div>
    </nav>
    <div class="container-fluid py-1 bg-dark page-header mb-5">
        <div class="container-fluid my-1 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown offset-2" style="font-size: 1.5em;">Hi
                {{ Auth::user()->username }},
            </h1>
            <h6 class="display-3 text-white mb-3 animated slideInDown offset-2" style="font-size: 2.5em;">
                {{ count($annonces) }} new
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
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        @if (count($annonces) > 0)
                            @foreach ($annonces as $annonce)
                                <div class="job-item p-4 mb-4 bg-light" style="border-radius: 15px;">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            @if ($annonce->image)
                                                {{-- <img class="flex-shrink-0 img-fluid rounded"
                                                    src="https://ui-avatars.com/api/?name={{ urlencode($annonce->username) }}"
                                                    alt="" style="width: 80px; height: 80px;"> --}}
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="/storage/{{ $annonce->image }}" alt=""
                                                    style="width: 80px; height: 80px;">
                                            @else
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="https://ui-avatars.com/api/?name={{ urlencode($annonce->username) }}"
                                                    alt="" style="width: 80px; height: 80px;">
                                            @endif


                                            <div class="text-start ps-4">
                                                {{-- {{ $annonce->title_of_offer }}
                                                <br>
                                                <hr> --}}
                                                {{-- {{ $annonce->define_needs }} --}}
                                                {{-- csdkcnsdiocdnsciodsncdsiocnsdiocndsiocdnsciodsncdslkcndslkcjndscodsicnsdoincsdlkcnsdcioniowenew --}}

                                                <style>
                                                    .truncate-text {
                                                        /* overflow: hidden;
                                                        text-overflow: ellipsis;
                                                        white-space: nowrap; */
                                                        display: -webkit-box;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        /* display: -webkit-box;
                                                        -webkit-box-orient: vertical;
                                                        -webkit-line-clamp: 3;
                                                        overflow: hidden; */
                                                    }
                                                </style>

                                                {{ $annonce->title_of_offer . '  ' . $annonce->id }}
                                                <div class="container-xxl">{{ $annonce->define_needs }} </div>

                                                {{--   <p class="truncate-text">
                                                    <br>
                                                    <hr>
                                                    {{ $annonce->define_needs }}
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius
                                                    reiciendis atque, distinctio quidem earum aliquam sapiente hic
                                                    minima maxime fugiat. Nesciunt odit, exercitationem et numquam
                                                    inventore fugiat soluta veniam ipsum? Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Sint recusandae quo facere tenetur.
                                                    Incidunt qui debitis porro consequuntur saepe deleniti. Doloremque
                                                    impedit sit voluptatibus! Illo perferendis obcaecati autem non ex?
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem magni
                                                    minus vitae totam deserunt, quasi dignissimos autem architecto
                                                    dolores aut sed ab eaque repellat, quo, voluptas aliquid!
                                                    Consequatur, laboriosam reiciendis!
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto
                                                    porro similique natus reprehenderit quidem fugiat ducimus voluptas
                                                    quos minima ratione rerum modi, incidunt aut adipisci amet enim,
                                                    temporibus dolorem quis?Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Veritatis quas esse eum reiciendis enim error
                                                    voluptate sed cumque culpa, et, dolorem nobis laborum, natus eveniet
                                                    cupiditate! Provident, consequatur? Architecto, voluptatibus?
                                                </p>

                                               --}}


                                                {{-- <h5 class="mb-3">Software Engineer</h5> --}}
                                                <div class="mt-3">
                                                    <span class="text-truncate me-3"><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>{{ $annonce->country }}
                                                    </span>
                                                    <span class="text-truncate me-3"><i
                                                            class="far fa-clock text-primary me-2"></i>{{ $annonce->type_of_employment }}</span>
                                                    <span class="text-truncate me-0"><i
                                                            class="far fa-money-bill-alt text-primary me-2"></i>{{ $annonce->monthly_salary }}
                                                        {{ $annonce->currency_coin }}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                            </div>
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-success text-light font-monospace me-1"
                                                    data-bs-toggle="offcanvas"
                                                    href="#offcanvasExample{{ $annonce->id }}" role="button"
                                                    aria-controls="offcanvasExample{{ $annonce->id }}">
                                                    Apply
                                                </a>
                                                <a class="btn btn-outline-secondary font-monospace"
                                                    href="{{ route('decline', ['user_id' => Auth::user()->id, 'annonce_id' => $annonce->id]) }}"
                                                    onclick="appelDecline()">Decline</a>



                                            </div>
                                            <small class="text-truncate"><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>Date Line:
                                                {{ \Carbon\Carbon::parse($annonce->expected_start_date)->format('d M, Y') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                {{-- !CAVANI --}}
                                <div class="offcanvas offcanvas-end" tabindex="-1"
                                    id="offcanvasExample{{ $annonce->id }}" aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Annonce details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <style>
                                            .header {
                                                width: 100%;
                                                /* margin-right: 5px; */
                                                height: 150px;
                                                /* position: absolute; */
                                                /* bottom: 0px; */
                                                /* */
                                                left: 0;
                                                right: 0;
                                                text-align: center;
                                                display: flex;
                                                background-color: #efece8;
                                                padding: 10px;
                                                border-bottom: 3px solid #c6c3bd;
                                            }

                                            .offcanvas-footer {
                                                /* background-color: red; */
                                                position: absolute;
                                                bottom: 0px;
                                                left: 0;
                                                right: 0;
                                                text-align: center;
                                                display: flex;
                                            }

                                            .offcanvas-footer button {
                                                width: 100%;
                                                /* margin-right: 5px; */
                                                height: 70px;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                /* border: 1px solid rgba(235, 236, 241, 1); */
                                                border-radius: 0px;
                                                font-size: 15px;
                                                transition: .3s;
                                                color: #FFFFFF;

                                                /* border: 1px solid rgba(255, 255, 255, 0.5); */

                                            }

                                            .btn-save {
                                                background-color: #ffc107;
                                                border: none;
                                            }

                                            .btn-save:hover i {
                                                transform: scale(1.5);
                                                transition: all 0.4s ease;
                                            }

                                            .btn-send:hover i {
                                                transform: scale(1.5);
                                                transition: all 0.4s ease;
                                            }

                                            .row {
                                                margin-top: 20px;
                                            }
                                        </style>



                                        <div class="container-fluid bg-white p-0 mb-5">
                                            <div class="row">
                                                <div class="col-md-12 header">
                                                    <div class=" d-flex align-items-center justify-content-center">
                                                        <img class="flex-shrink-0 img-fluid rounded"
                                                            src="https://ui-avatars.com/api/?name={{ urlencode($annonce->username) }}"
                                                            alt="" style="width: 80px; height: 80px;">
                                                        <div class="text text-dark ms-2" style="width: 100%;">
                                                            <h5 class="animated slideInDown"> {{ $annonce->username }}
                                                            </h5>
                                                            <h6> {{ $annonce->address }}, {{ $annonce->country }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 "
                                                    style="background-color: #efece8; border-left: 3px solid #c6c3bd; height: auto;">
                                                    <div class="d-flex ">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            {{-- <h6 class="line-height-2">
                                                                {{ $annonce->define_needs }}</h6>
                                                            <hr> --}}
                                                            <h6 class="mt-1" style="font-weight: 700;">Description
                                                            </h6>
                                                            <p class="lh-lg text-start" style="font-size: 0.8rem;">
                                                                {{ $annonce->define_needs }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-6  d-flex align-items-start justify-content-start">
                                                    <div>
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6 style="font-weight: 700;"> START DATE : </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div>
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6> {{ \Carbon\Carbon::parse($annonce->expected_start_date)->format('d M, Y') }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  d-flex align-items-start justify-content-start">
                                                    <div>
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6 style="font-weight: 700;"> SALARY: </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div>
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6> {{ $annonce->monthly_salary }}
                                                                {{ $annonce->currency_coin }} / MONTH</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  d-flex align-items-start justify-content-start">
                                                    <div class=" d-flex align-items-start justify-content-start">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6 style="font-weight: 700;"> HOUSING: </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class=" d-flex align-items-center justify-content-center">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6> {{ $annonce->accommodation }} </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  d-flex align-items-start justify-content-start">
                                                    <div class=" d-flex ">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6 style="font-weight: 700;"> ARRANGEMENT: </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class=" d-flex align-items-center justify-content-center">
                                                        <div class="text text-dark"
                                                            style="width: 100%;overflow: auto;">
                                                            <h6> {{ $annonce->living_arrangement }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  d-flex align-items-start justify-content-start">
                                                    <div class=" d-flex ">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6 style="font-weight: 700;"> DAY OFF: </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class=" d-flex align-items-center justify-content-center">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6> {{ $annonce->day_off }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6  d-flex align-items-start justify-content-start">
                                                    <div class="d-flex">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6 style="font-weight: 700;">NATIONALITY: </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <div class=" d-flex">
                                                        <div class="text text-dark" style="width: 100%;">
                                                            <h6> {{ $annonce->helper_nationality }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                        {{-- <div class="container-fluid mt-5">
                                            <div class="row">
                                                <div class="col-md-12">

                                                </div>
                                            </div>
                                        </div> --}}


                                        <!-- Body content here -->
                                        <div class="offcanvas-footer">
                                            {{-- <i class="fa-solid fa-paper-plane fa-lg"></i> --}}

                                            <a href="{{ route('contacter', ['user_id' => Auth::user()->id, 'annonce_id' => $annonce->id]) }}"
                                                type="submit" class="btn btn-success btn-send" onclick="appelJS()">
                                                <i class="fa-solid fa-paper-plane fa-lg "></i></a>
                                            {{-- <a type="button" class="btn btn-outline-warning btn-save"><i
                                                    class="fa-regular fa-heart fa-lg"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- !END --}}
                            @endforeach
                        @endif
                    </div>
                    {{-- <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a> --}}
                    {{-- <a class="dropdown-item" href="#" data-toggle="modal"
                        data-target="#ModalShow{{ $annonce->id }}" style="color: #9cb2bd;"> --}}

                    {{-- ! --}}
                    <div id="tab-2" class="tab-pane fade show p-0">
                        {{-- ! --}}
                        @if (count($apply) > 0)
                            @foreach ($apply as $apply)
                                <div class="job-item p-4 mb-4 bg-light" style="border-radius: 15px;">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            @if ($apply->image)
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="/storage/{{ $apply->image }}" alt=""
                                                    style="width: 80px; height: 80px;">
                                            @else
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="https://ui-avatars.com/api/?name={{ urlencode($apply->username) }}"
                                                    alt="" style="width: 80px; height: 80px;">
                                            @endif
                                            <div class="text-start ps-4">
                                                <style>
                                                    .truncate-text {
                                                        /* overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    white-space: nowrap; */
                                                        display: -webkit-box;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        /* display: -webkit-box;
                                                    -webkit-box-orient: vertical;
                                                    -webkit-line-clamp: 3;
                                                    overflow: hidden; */
                                                    }
                                                </style>

                                                {{ $apply->title_of_offer }}
                                                <div class="container-xxl">{{ $apply->define_needs }} </div>

                                                <div class="mt-3">
                                                    <span class="text-truncate me-3"><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>{{ $apply->country }}
                                                    </span>
                                                    <span class="text-truncate me-3"><i
                                                            class="far fa-clock text-primary me-2"></i>{{ $apply->type_of_employment }}</span>
                                                    <span class="text-truncate me-0"><i
                                                            class="far fa-money-bill-alt text-primary me-2"></i>{{ $apply->monthly_salary }}
                                                        {{ $apply->currency_coin }}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                            </div>
                                            <div class="d-flex mb-3">

                                                {{-- <a class="btn btn-success text-light font-monospace me-1"
                                                data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                role="button" aria-controls="offcanvasExample">
                                                Apply
                                            </a> --}}
                                                <a class="btn btn-outline-secondary font-monospace"
                                                    href="{{ route('contacter', ['user_id' => Auth::user()->id, 'annonce_id' => $apply->id]) }}">Apply</a>



                                            </div>
                                            <small class="text-truncate"><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>Date Line:
                                                {{ \Carbon\Carbon::parse($apply->expected_start_date)->format('d M, Y') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- ! --}}
                        {{-- <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a> --}}
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        {{-- ? --}}
                        @if (count($decline) > 0)
                            @foreach ($decline as $decline)
                                <div class="job-item p-4 mb-4 bg-light" style="border-radius: 15px;">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            @if ($decline->image)
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="/storage/{{ $decline->image }}" alt=""
                                                    style="width: 80px; height: 80px;">
                                            @else
                                                <img class="flex-shrink-0 img-fluid rounded"
                                                    src="https://ui-avatars.com/api/?name={{ urlencode($decline->username) }}"
                                                    alt="" style="width: 80px; height: 80px;">
                                            @endif
                                            <div class="text-start ps-4">
                                                <style>
                                                    .truncate-text {
                                                        /* overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    white-space: nowrap; */
                                                        display: -webkit-box;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        /* display: -webkit-box;
                                                    -webkit-box-orient: vertical;
                                                    -webkit-line-clamp: 3;
                                                    overflow: hidden; */
                                                    }
                                                </style>

                                                {{ $decline->title_of_offer . '  ' . $decline->id }}
                                                <div class="container-xxl">{{ $decline->define_needs }} </div>

                                                <div class="mt-3">
                                                    <span class="text-truncate me-3"><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>{{ $decline->country }}
                                                    </span>
                                                    <span class="text-truncate me-3"><i
                                                            class="far fa-clock text-primary me-2"></i>{{ $decline->type_of_employment }}</span>
                                                    <span class="text-truncate me-0"><i
                                                            class="far fa-money-bill-alt text-primary me-2"></i>{{ $decline->monthly_salary }}
                                                        {{ $decline->currency_coin }}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                            </div>
                                            <div class="d-flex mb-3">

                                                {{-- <a class="btn btn-success text-light font-monospace me-1"
                                                data-bs-toggle="offcanvas" href="#offcanvasExample"
                                                role="button" aria-controls="offcanvasExample">
                                                Apply
                                            </a> --}}
                                                <a class="btn btn-outline-secondary font-monospace"
                                                    href="{{ route('decline', ['user_id' => Auth::user()->id, 'annonce_id' => $decline->id]) }}">Decline</a>



                                            </div>
                                            <small class="text-truncate"><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>Date Line:
                                                {{ \Carbon\Carbon::parse($decline->expected_start_date)->format('d M, Y') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- ? --}}
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

    {{-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        Button with data-bs-target
    </button> --}}

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Annonce details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <style>
                .header {
                    width: 100%;
                    /* margin-right: 5px; */
                    height: 150px;
                    /* position: absolute; */
                    /* bottom: 0px; */
                    /* */
                    left: 0;
                    right: 0;
                    text-align: center;
                    display: flex;
                    background-color: #efece8;
                    padding: 10px;
                    border-bottom: 3px solid #c6c3bd;
                }

                .offcanvas-footer {
                    /* background-color: red; */
                    position: absolute;
                    bottom: 0px;
                    left: 0;
                    right: 0;
                    text-align: center;
                    display: flex;
                }

                .offcanvas-footer a {
                    width: 100%;
                    /* margin-right: 5px; */
                    height: 70px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    /* border: 1px solid rgba(235, 236, 241, 1); */
                    border-radius: 0px;
                    font-size: 15px;
                    transition: .3s;
                    color: #FFFFFF;

                    /* border: 1px solid rgba(255, 255, 255, 0.5); */

                }

                .btn-save {
                    background-color: #ffc107;
                    border: none;
                }

                .btn-save:hover i {
                    transform: scale(1.5);
                    transition: all 0.4s ease;
                }

                .btn-send:hover i {
                    transform: scale(1.5);
                    transition: all 0.4s ease;
                }

                .row {
                    margin-top: 20px;
                }

                @media (max-width < 1023px) {

                    /* CSS styles to apply when the screen size is less than 1024 pixels */
                    h6 {
                        color: red;

                    }
                }

                .text h6 {
                    font-size: 14px;
                }

                .text h5 {
                    font-size: 18px;
                }
            </style>
            {{-- <div class="row">
                <div class="col-md-12">

                </div>
            </div> --}}
            {{-- <img src="{{ asset('img/profile-admin.png') }}" alt="" style="width: 80px;height: 80px;"> --}}
            {{-- <div class="header d-flex align-items-center justify-content-center">
                <img class="flex-shrink-0 img-fluid rounded"
                    src="https://ui-avatars.com/api/?name={{ urlencode($annonce->username) }}" alt=""
                    style="width: 80px; height: 80px;">
                <div class="text text-dark" style="width: 100%;">
                    <h5 class="animated slideInDown"> HERE FAMILLE USERNAME</h5>
                    <h6> HERE FAMILLE ADRESS, COUNTRY</h6>
                </div>
            </div> --}}





            <!-- Body content here -->
            <div class="offcanvas-footer">
                {{-- <i class="fa-solid fa-paper-plane fa-lg"></i> --}}
                <a type="button" class="btn btn-success btn-send">
                    <i class="fa-solid fa-paper-plane fa-lg "></i></a>
                <button type="button" class="btn btn-outline-warning btn-save"><i
                        class="fa-regular fa-heart fa-lg"></i></button>


            </div>
        </div>
    </div>
    {{-- <button type="button" onclick="appelJS()">APPEL</button>
    <button type="button" onclick="appelDecline()">APPEL 2</button> --}}

    <script>
        function appelSuccess() {
            swal("Job applied!", "", "error")
        }
    </script>


    <script>
        function appelDecline() {
            swal({
                title: "Job Declined!",
                timer: 800
            });
        }
    </script>



    {{-- <a href="{{ route('profile-candidat') }}">profile</a> --}}

    {{-- ////////////////// Search scripte ////////// --}}
    <script>
        $(document).ready(function() {
            $("#title_of_offer").on('keyup', function() {
                var value = $(this).val();
                // alert('ok');
                $.ajax({
                    url: "{{ route('candidat.ajax_searsh_name') }}",
                    type: "GET",
                    data: {
                        'title_of_offer': value
                    },
                    success: function(data) {
                        $("#user_list").html(data);
                        //    alert('ok');

                    }
                });
            });
            $(document).on('click', 'li', function() {
                var value = $(this).text();
                $("#title_of_offer").val(value);
                $("#user_list").html("");
            });
        });
    </script>
    {{-- ////////////////// end  Search scripte ////////// --}}
    {{-- <a href="{{ route('profile-candidat') }}">profile</a> --}}

</body>

</html>
