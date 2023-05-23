<body
    style=" display: flex; justify-content: center; align-items: center;background-position: center;
background-repeat: no-repeat;
background-size: cover;"
    background="{{ asset('img/back-blur.png') }}">



    <style>
        .card-send {
            width: 30%;
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

        .form-group input[type="email"] {
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
        <div class="modal-body ">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <center>
                    <img src="{{ asset('img/paper.png') }}" alt=""
                        style="max-width: 100px;display: flex;align-content: center;">
                    <!-- Email Address -->
                    <div>
                        <div class="form-group mt-3">
                            <input id="email" type="email" name="email" class="form-control"
                                placeholder="Verification email" required autofocus>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn-send text text-light font-weight-bold">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </center>

            </form>
        </div>
    </div>


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

{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
