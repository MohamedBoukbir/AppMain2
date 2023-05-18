@extends('front.account')

@section('item-list-1')
    <p class="menu-item-label" style="color: #144862!important;">Dashboard</p>
@endsection

@section('item-list-2')
    <p class="menu-item-label">New Applications</p>
@endsection

@section('item-list-3')
    <p class="menu-item-label">Conversations</p>
@endsection

@section('item-list-4')
    <p class="menu-item-label">Saved profiles</p>
@endsection


@section('content')
    <style>
        .main-content {
            margin-top: 10px;
            background: #f6f8f9;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .dashboard-container {
            position: relative;
        }

        .dashboard-container::before {
            content: "";
            position: absolute;
            height: 290px;
            width: 100%;
            top: 0;
            left: 0;
            background-color: #fff;
        }


        .dashboard {
            padding: 30px;
            max-width: 1060px;
            position: relative;
            flex: 1 1 auto;
            height: 100%;
            margin: auto;
            margin-top: 0px;
            /* background-color: #6c757d; */
            border-radius: 20px;
        }

        div {
            display: block;
        }

        .dashboard-card {
            padding: 0;
        }

        .dashboard * {
            -webkit-font-smoothing: antialiased;
        }

        .dashboard-card-title {
            font-size: 36px;
            line-height: 40px;
            font-weight: 400;
            margin: 0 0 15px;
        }

        h2 {
            display: block;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .dashboard-card-text {
            color: #9cb2bd;
            font-size: 16px;
            line-height: 24px;
        }

        .dashboard-card-text>p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .dashboard-card-subtitle {
            color: #9cb2bd;
            font-size: 22px;
            margin: 30px 0 15px;
            line-height: 28px;
        }

        h5 {
            display: block;
            /* font-size: 0.83em; */
            margin-block-start: 1.67em;
            margin-block-end: 1.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .dashboard-card-container {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            /* background-color: #f49758; */
            background-color: #9e9cf7;
            border-radius: 6px;
            padding: 20px;
            width: 100%;
            box-shadow: 0 2px 10px rgba(54, 54, 54, .2);
            color: #fff;
            font-family: Nunito, Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 20px;
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .card-image {
            background-image: url('img/king.png');
            background-size: contain;
            background-repeat: no-repeat;
            display: inline-block;
            height: 48px;
            width: 48px;
        }

        .card-title {
            margin: 0;
            text-transform: uppercase;
            font-weight: 900;
            color: #fff;
            font-family: Nunito, Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 20px;
            margin-top: 14px;
        }

        h4 {
            display: block;
            margin-block-start: 1.33em;
            margin-block-end: 1.33em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .card-text {
            font-weight: 600;
            margin: 4px 0 24px;
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .card-button {
            color: #9e9cf7;
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            border: none;
            font-family: Nunito, Arial, Helvetica, sans-serif;
            background-color: #fff;
            border-radius: 6px;
            font-weight: 700;
            font-size: 16px;
            line-height: 22px;
            width: 100%;
            padding: 14px;
            box-shadow: 0 2px 10px rgba(54, 54, 54, .2);
            transition: all .25s ease-in;
            outline: 0;
        }

        .yp-dashboard-activesAds-block-ads {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 30px 10px;
            justify-content: space-between;
        }

        .yp-dashboard-activesAds-block-ads-ad {
            width: 100%;
            margin-bottom: 20px;
        }

        .yp-card-block-container {
            margin: 0 auto;
            padding: 0;
            background: #fff;
            border-radius: 3px;
            box-shadow: 0 3px 7px 0 rgba(82, 82, 82, .05);
            max-width: none;
        }

        .yp-card-block-ad-incomplete {
            font-family: Montserrat, Arial, Helvetica, sans-serif;
        }

        .yp-card-block-ad-incomplete-header {
            padding: 7px 15px;
            border-bottom: 1px solid #f6f6f6;
            text-transform: uppercase;
            margin-bottom: 35px;
        }

        .yp-card-block-ad-incomplete-header__title {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #9cb2bd;
        }

        .yp-card-block-ad-incomplete-body {
            padding: 0 15px 15px;
            text-align: center;
        }

        .yp-card-block-ad-incomplete-body__icon {
            width: 61px;
            height: 55px;
            margin-bottom: 25px;
        }

        img {
            overflow-clip-margin: content-box;
            overflow: clip;
        }

        .yp-card-block-ad-incomplete-body__text {
            font-size: 11px;
            font-weight: 500;
            color: #9cb2bd;
            max-width: 215px;
            margin: auto auto 20px;
        }

        .yp-card-block-ad-incomplete-body__link {
            font-size: 13px;
            font-weight: 600;
            color: #9e9cf7;
            text-decoration: none;
        }

        .yp-dashboard-title-block {
            font-family: Nunito, Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #9cb2bd;
            margin: 25px 0 20px;
        }

        h1 {
            display: block;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .card-button a {
            color: #9e9cf7;
        }
    </style>

    <div class="main-content">
        <div class="dashboard-container">
            <div class="dashboard">
                <div class="dashboard-card">
                    <div>
                        <a href="{{ route('famille.regester') }}">nadi nadi</a>
                        <h2 class="dashboard-card-title"> Hi {{Auth::user()->username }}</h2>
                        <p class="dashboard-card-text">
                            {{ __('Welcome to your personal dashboard! Here you can manage your searches and job posting.') }}
                        </p>
                    </div>
                    <a href="{{ route('chat') }}">message</a>
                    <br>
                    <a href="{{ route('users.selectusernorole')}}">selecter</a>
                    <div>
                        <h5 class="dashboard-card-subtitle">{{ __('Can we help you?') }}</h5>
                        <div class="dashboard-card-container">
                            <div class="card">
                                <div>
                                    <span class="card-image">

                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                            <path
                                                d="m21 2-5 5-4-5-4 5-5-5v13h18zM5 21h14a2 2 0 0 0 2-2v-2H3v2a2 2 0 0 0 2 2z">
                                            </path>
                                        </svg> --}}

                                    </span>

                                    <h4 class="card-title">
                                        PREMIUM SUBSCRIPTION
                                    </h4>
                                    <p class="card-text">You can search and find helpers for free, but only Premium users
                                        can contact them.</p>
                                </div>
                                <button class="card-button mt-3" type="button"><a
                                        href="{{ route('account-souscription') }}">Upgrade to premium </a><i
                                        {{-- href="#">Upgrade to premium </a><i --}}
                                        class='bx bx-chevron-right align-middle'></i></button>
                            </div>
                        </div>
                    </div>
                    {{-- START --}}

                    <div class="yp-dashboard-activesAds-block">
                        <h1 class="yp-dashboard-title-block">
                            Your Job Posting
                        </h1>
                        <div class="yp-dashboard-activesAds-block-ads">
                            <div class="yp-dashboard-activesAds-block-ads-ad">
                                <div class="yp-card-block-container yp-card-block-ad-container">
                                    <div
                                        class="yp-card-block-container yp-card-block-ad-container yp-card-block-ad-incomplete">
                                        <div class="yp-card-block-ad-incomplete-header">
                                            <div class="yp-card-block-ad-incomplete-header__title">
                                                Domestic help
                                            </div>
                                        </div>
                                        <div class="yp-card-block-ad-incomplete-body"><img src="{{ asset('img/edit.png') }}"
                                                alt="icon" class="yp-card-block-ad-incomplete-body__icon">
                                            <div class="yp-card-block-ad-incomplete-body__text">
                                                Unfortunately, you don't have a job posting yet. Fill your needs now to help
                                                you find the perfect match
                                            </div> <a href="/registration/employer"
                                                class="yp-card-block-ad-incomplete-body__link">
                                                Define my needs
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- END --}}



                </div>
            </div>
        </div>
    </div>






    {{-- <p style="margin: 300px; font-size: 80px">dashboard</p> --}}
@endsection
