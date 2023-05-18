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

</head>

<body style="background-color: #FFF">
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 4rem; height: 4rem;color:#00B074;font-weight: 900;border-width: 10px;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

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
                        <a class="dropdown-item disabled" href="#">Username</a>
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
            .card-hover:hover {
                border: #00B074;
                border-color: #00B074;
                border-style: groove;
                border-width: 1px;
                transition: all 0.5s ease;
            }

            .red-border :focus {
                border: #00B074;
                border-color: #00B074;
                border-style: groove;
                /* padding: 5px; */
                border-width: 2px;
                transition: all 0.2s ease;
            }

            .red-border :focus h5 {
                transition: all 0.3s ease;
                font-weight: 900;
                transform: rotate(1.0turn);
                /* color: white; */
            }

            .red-border :focus p {
                transition: all 0.3s ease;
                font-weight: 500;
            }

            h1 {
                text-transform: uppercase;
                font-size: 40px;
                font-weight: 900;
                text-align: center;
                color: #4a4a4a;
                margin-bottom: 70px;
                margin: .67em 0;
            }
        </style>
        <h1>WHAT ARE YOU LOOKING FOR?</h1>
        <div class="container forms"
            style="display: flex; align-items: center; justify-content: center;column-gap: 30px;">
            <a class="row d-flex justify-content-center" href="{{ route('useratacher',$user['users']='famille')}}">
                <div class="col-xl-0 col-sm-12 col-12 p-5">
                    <div class="red-border">
                        <div class="card card-hover" style="width: 25rem;cursor: pointer;box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);padding: 10px;" tabindex="1">
                            <center>
                                <img class="card-img-top" src="{{ asset('img/employer.png') }}" alt="Card image cap"
                                    style="width: 150px;margin:5px">
                            </center>

                            <div class="card-body">
                                <center>
                                    <h5 class="card-title text text-primary">Help</h5>
                                    <p style="color: #3b3b3b;">Find a Babysitter, Childminder, Nanny, or Au Pair</p>
                                </center>
                            </div>
                        </div>
                    </div>

                </div>
            </a>

            <a class="row d-flex justify-content-center" href="{{ route('useratacher',$user['users']='candidat')}}">
                <div class="col-xl-0 col-sm-12 col-12 p-5">
                    <div class="red-border">
                        <div class="card card-hover" style="width: 25rem;cursor: pointer;box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);padding: 10px;" tabindex="1">
                            <center>
                                <img class="card-img-top" src="{{ asset('img/applicant.png') }}"
                                    alt="Card image cap" style="width: 150px;margin:5px">
                            </center>

                            <div class="card-body">
                                <center>
                                    <h5 class="card-title text text-primary">A Job</h5>
                                    <p style="color: #3b3b3b;">As a Babysitter, Childminder, Nanny, or Au Pair  </p>
                                </center>

                            </div>
                        </div>
                    </div>

                </div>
            </a>

            
        </div>
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">HomeHelper</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            {{-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> --}}
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/new-wow.min.js') }}"></script>
    <script src="{{ asset('js/new-easing.min.js') }}"></script>
    <script src="{{ asset('js/new-waypoints.min.js') }}"></script>
    <script src="{{ asset('js/new-owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/new-main.js') }}"></script>
    <script src="{{ asset('js/states.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
