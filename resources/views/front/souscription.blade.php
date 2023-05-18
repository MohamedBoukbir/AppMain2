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
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border"
                style="width: 4rem; height: 4rem;color:#9e9cf7;font-weight: 900;border-width: 10px;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                {{-- <img src="{{ asset('img/big-logo.png') }}" alt="" style="width: 60px;margin-right: 15px;"> --}}
                <h1 class="m-0 text-muted"
                    style="-webkit-text-stroke-width: 2px;-webkit-text-stroke-color: #9e9cf7; font-family:cursive">
                    HomeHelp</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    {{-- <a href="index.html" class="nav-item nav-link active">Home</a> --}}
                    <a href="#" class="nav-item nav-link">Help</a>
                </div>
                <style>
                    li {
                        list-style-type: none;
                    }
                </style>

                <style>
                    .btn-upgrade {
                        width: 12%;
                        height: 50px;
                        /* min-width: 230px; */
                        /* padding: 10px 20px; */
                        background: transparent;
                        cursor: pointer;
                        /* background-color: #f49758; */
                        background-color: #9e9cf7;
                        color: #fff;
                        border: 2px solid #9e9cf7;
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

                    .btn-upgrade:hover {
                        color: #fff;
                    }
                </style>
                <button type="button" class="btn-upgrade btn btn-lg ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>

                    <a href="#" class="return-link text-light"> {{ __('I\'ll Upgrade later') }}</a>
                </button>
            </div>
        </nav>


        <style>
            .text-align-center {
                text-align: center !important;
            }

            .new-premium .home-title.premium-title {
                position: relative;
                display: inline-block;
            }

            .home-title:not(.home-title--white) {
                font-size: 45px;
                line-height: 45px;
                z-index: 10;
                position: relative;
                display: inline-block;
                margin: 0 auto 0 0;
                font-weight: 600;
                text-align: left;
                max-width: 700px;
                overflow-wrap: break-word;
                color: #144862;
                font-family: Avenir, Helvetica, Arial, sans-serif;
            }

            .home-title:not(.home-title--white):not(.no-border):not(.title-no-border):after {
                content: " ";
                width: calc(100% + 10px);
                height: 9px;
                border-radius: 6px;
                background-color: #9e9cf7;
                position: absolute;
                left: -5px;
                bottom: 2px;
                z-index: -1;
            }

            .message-box {
                font-size: 20px;
                font-weight: 900;
                text-align: center;
                color: #144862;
                margin-top: 20px;
            }
        </style>


        <header class="text-align-center ">
            <h1 class="home-title premium-title mt-5">
                Become Premium!
            </h1>
        </header>

        <section class="message-box">
            <p>
                Hello {{ Auth::user()->username }}!<br>
                To get in touch with an unlimited amount of profiles, become premium!
            </p>
        </section>



        <style>
            .card {
                border: none;
                padding: 10px 50px;
            }

            .card::after {
                position: absolute;
                z-index: -1;
                opacity: 0;
                -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
                transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            }

            .card:hover {
                transform: scale(1.02, 1.02);
                -webkit-transform: scale(1.02, 1.02);
                backface-visibility: hidden;
                will-change: transform;
                box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
            }

            .card:hover::after {
                opacity: 1;
            }

            .card:hover .btn-violet-outline {
                color: white;
                background: #9e9cf7;
            }
        </style>
        {{-- HHHH --}}

        <div class="container-fluid">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Basic</h5>
                                    <small>Individual</small>
                                    <br><br>
                                    <span class="h2">$8</span>/month
                                    <br><br>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Cras justo odio</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Dapibus ac facilisis in</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Vestibulum at eros</li>
                            </ul>
                            <div class="card-body text-center">
                                <button class="btn btn-violet-outline btn-lg"
                                    style="border-radius:30px;border-color: #9e9cf7">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Standard</h5>
                                    <small>Small Business</small>
                                    <br><br>
                                    <span class="h2">$20</span>/month
                                    <br><br>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Cras justo odio</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Dapibus ac facilisis in</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Vestibulum at eros</li>
                            </ul>
                            <div class="card-body text-center">
                                <button class="btn btn-violet-outline btn-lg"
                                    style="border-radius:30px;border-color: #9e9cf7">Select</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Premium</h5>
                                    <small>Large Companies</small>
                                    <br><br>
                                    <span class="h2">$40</span>/month
                                    <br><br>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Cras justo odio</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Dapibus ac facilisis in</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> Vestibulum at eros</li>
                            </ul>
                            <div class="card-body text-center">
                                <button class="btn btn-violet-outline btn-lg"
                                    style="border-radius:30px;border-color: #9e9cf7">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END --}}

            <section>
                <div class="text-center step-title hidden-xs">
                    <p class="step-title-2">
                        Enter Your Payment Information
                    </p>
                    <p class="visible-xs yp-premium-prices__choose"></p>
                </div>
                {{-- <div id="premium-payment-form" class="premium-payment-container">
                    <div class="row">
                        <div class="premium-section col-xs-16">
                            <h3 class="visible-xs">
                                Payment method
                                <img src="https://static.helperchoice.com/bundles/yoopiescore/img/payment/lock.png?2190"
                                    class="lock">
                            </h3>
                            <div class="logos-cb"><img
                                    src="https://static.helperchoice.com/bundles/yoopiescore/img/payment/icon-visa.png?2190">
                                <img
                                    src="https://static.helperchoice.com/bundles/yoopiescore/img/payment/icon-mastercard.png?2190">
                                <img
                                    src="https://static.helperchoice.com/bundles/yoopiescore/img/payment/icon-cb.png?2190">
                            </div>
                        </div>
                        <div class="col-xs-16 col-md-8">
                            <!---->
                            <div class="mb-10 credit-card-inputs">
                                <div data-v-5ea18894="">
                                    <div data-v-5ea18894="" id="card-element" class="StripeElement empty">
                                        <div class="__PrivateStripeElement"
                                            style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
                                            <iframe name="__privateStripeFrame0296" frameborder="0"
                                                allowtransparency="true" scrolling="no" role="presentation"
                                                allow="payment *"
                                                src="https://js.stripe.com/v3/elements-inner-card-58483446ac2fb4cee3d6e946cd472038.html#locale=en&amp;wait=false&amp;mids[guid]=NA&amp;mids[muid]=92d8b8f6-edfb-4588-a9e1-1bc9be383fcc1ebcac&amp;mids[sid]=c78edb79-0d97-47e7-b5b7-8b08892f9136e38f8a&amp;hidePostalCode=true&amp;style[base][color]=%23363636&amp;style[base][fontWeight]=500&amp;style[base][fontSize]=20px&amp;style[base][fontSmoothing]=antialiased&amp;style[base][::placeholder][color]=%23CFD7DF&amp;style[base][:-webkit-autofill][color]=%23e39f48&amp;style[invalid][color]=%23E25950&amp;style[invalid][::placeholder][color]=%23FFCCA5&amp;rtl=false&amp;componentName=card&amp;keyMode=live&amp;apiKey=pk_live_BdYDjihZhA0S3XLYF4Dzy0as&amp;referrer=https%3A%2F%2Fwww.helperchoice.com%2Fpremium&amp;controllerId=__privateStripeController0291"
                                                title="Secure card payment input frame"
                                                style="border: none !important; margin-top: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: light only !important; height: 24px;"></iframe><input
                                                class="__PrivateStripeElement-input" aria-hidden="true"
                                                aria-label=" " autocomplete="false" maxlength="1"
                                                style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;">
                                        </div>
                                    </div>
                                    <div data-v-5ea18894="" id="card-errors" role="alert"></div>
                                </div>
                                <!---->
                            </div>
                            <div class="form-group payment-condition">
                                <div class="yp-checkbox-container payment-condition-checkbox">
                                    <!----> <input type="checkbox" id="payment-condition" name="checkbox"
                                        required="required" class="none"> <span class="yp-checkbox">
                                        <!---->
                                    </span>
                                </div> <label for="payment-condition" class="payment-condition-text">
                                    I accept the <a href="/cgv" target="_blank" class="condition-gen">General
                                        Terms and Conditions of Sale and Use</a> and expressly renounce to the exercise
                                    of my right of withdrawal in case I start using the services.
                                </label>
                            </div>
                            <!---->
                            <!---->
                            <div class="form-group hidden-xs"><button disabled="disabled"
                                    class="btn btn-lg btn-success payment-submit"><span>
                                        Submit
                                    </span></button></div>
                            <!---->
                        </div>
                        <div class="col-xs-16 col-md-6 col-md-offset-2">
                            <p class="payment-price hidden-xs"><strong>
                                    Total:
                                    <span class="text-orange"><span>$119.00</span></span></strong></p>
                            <div class="form-group visible-xs"><button disabled="disabled"
                                    class="btn btn-lg btn-success payment-submit stripe-payment-submit"><span>
                                        Submit
                                    </span></button></div>
                            <div class="payment-helptext">
                                <p class="hidden-xs"><img
                                        src="https://static.helperchoice.com/bundles/yoopiescore/img/payment/secure-lock.png?2190"
                                        class="secure-lock"> <img
                                        src="https://static.helperchoice.com/bundles/yoopiescore/img/payment/lock.png?2190"
                                        class="lock"> <strong class="ssl">SSL</strong></p>
                                <p><strong>
                                        <!----> <span>
                                            Secure payment by credit card. Your subscription will be renewed
                                            automatically. You can cancel the renewal at any time from the section "My
                                            account".
                                        </span>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </section>


        </div>


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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>

</body>

</html>
