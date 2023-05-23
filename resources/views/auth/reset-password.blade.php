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


    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">


    <div class="card-send">
        <div class="modal-body ">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                {{-- <!-- Password Reset Token --> --}}
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <center>
                    <img src="{{ asset('img/rotate.png') }}" alt=""
                        style="max-width: 100px;display: flex;align-content: center;">
                    <!-- Email Address -->
                    <div>
                        <div class="form-group mt-3">
                            <x-text-input id="email" class="form-control block mt-1 w-full" type="email"
                                name="email" :value="old('email', $request->email)" autofocus autocomplete="username" disabled />
                            {{-- <input id="email" class="form-control block mt-1 w-full" type="email" name="email"
                                :value="old('email', $request - > email)" required autofocus autocomplete="username" placeholder="Your Email"> --}}

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group mt-3">
                            <input id="password" class="form-control block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" placeholder="New password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-group mt-3">
                            <input id="password_confirmation" class="form-control block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm new password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn-send text text-light font-weight-bold">
                                {{ __('Reset Password') }}
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
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
