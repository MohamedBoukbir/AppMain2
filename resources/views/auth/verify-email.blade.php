<body
    style=" display: flex; justify-content: center; align-items: center;background-position: center;
background-repeat: no-repeat;
background-size: cover;"
    background="{{ asset('img/back-blur.png') }}">



    <style>
        .card-send {
            width: 50%;
            background-color: #FFF;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 2px 10px rgba(54, 54, 54, .2);

        }

        .btn-send {
            width: 60%;
            height: 50px;
            /* min-width: 230px; */
            /* padding: 10px 20px; */
            background: transparent;
            cursor: pointer;
            background-color: #00b074;
            color: #fff;
            border: 2px solid #00b074;
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

        .btn-logout {
            width: 20%;
            height: 50px;
            /* min-width: 230px; */
            /* padding: 10px 20px; */
            background: transparent;
            cursor: pointer;
            background-color: #f44336;
            color: #fff;
            border: 2px solid #f44336;
            padding: 5px;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 11px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: background-color .3s, border-color .3s;

            box-shadow: 0 2px 10px rgba(54, 54, 54, .2);
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            height: 70px;
            border: 1px solid rgba(235, 236, 241, 1);
            padding: 0 30px;
            font-size: 15px;
            color: #000000;
            border-radius: 5px;
        }
    </style>




    <div class="card-send">
        <div class="modal-body">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <center>
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success">
                            {{ __('verification link has been sent.') }}
                        </div>
                    @endif
                    <img src="{{ asset('img/paper-plane.png') }}" alt=""
                        style="max-width: 100px;display: flex;align-content: center">
                    <div class="form-group mt-3">
                        <input class="form-control text-center text-secondary font-weight-bold" type="email"
                            value="{{ Auth::user()->email }}" disabled>
                    </div>
                    {{-- <div class="text text-secondary font-weight-bold mt-3">Verify your mail at: </div> --}}
                    <div>
                        <button type="submit" class="btn-send text text-light font-weight-bold"
                            onclick="showMessage()">
                            {{ __('Send Verification Email') }}
                        </button>

                    </div>


            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout text text-light font-weight-bold">
                    {{ __('Log Out') }}
                </button>
            </form>

            </center>
        </div>
    </div>







    {{-- ------------------------ DELETE MODAL ---------------------------- --}}
    {{-- <div class="card modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <style>
                   
                  
                   

                    .btn-logout {
                        width: 90%;
                        height: 50px;
                        /* min-width: 230px; */
                        /* padding: 10px 20px; */
                        background: transparent;
                        cursor: pointer;
                        background-color: #f44336;
                        color: #fff;
                        border: 2px solid #f44336;
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
                </style> --}}

    {{-- <div class="modal-body">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <center>
                            <img src="{{ asset('img/paper-plane.png') }}" alt=""
                                style="max-width: 100px;display: flex;align-content: center">

                            <div>
                                <button type="submit" class="btn-send">
                                    {{ __('Resend Verification Email') }}
                                </button>
                                {{-- <x-primary-button>
                            {{ __('Resend Verification Email') }}
                        </x-primary-button> --}}
    {{-- </div> --}}
    {{-- </center> --}}
    {{-- </form> --}}
    {{-- </div> --}}
    {{-- <div class="modal-footer"> --}}




    {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-logout">
                        {{ __('Log Out') }}
                    </button>
                </form> --}}


    {{-- <button type="submit"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log Out') }}
                </button> --}}

    {{-- </div> --}}



    {{-- 

            </div>
        </div>
    </div> --}}
    {{-- //////////////////////////////////////////////////////// --}}
    {{-- <x-guest-layout>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another. ') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="button" class="btn-send">
                        {{ __('Resend Verification Email') }}
                    </button>
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-guest-layout> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
