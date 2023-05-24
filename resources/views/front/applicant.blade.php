@extends('front.account')

@section('item-list-1')
    <p class="menu-item-label">Dashboard</p>
@endsection

@section('item-list-2')
    <p class="menu-item-label" style="color: #144862!important;;">New Applications</p>
@endsection

@section('item-list-3')
    <p class="menu-item-label">Conversations</p>
@endsection

@section('item-list-4')
    <p class="menu-item-label">Saved profiles</p>
@endsection


@section('content')

    <style>
        .yp-main-content {
            background: #f6f8f9;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .yp-main-content .yp-candidates-container {
            display: flex;
            flex-flow: column nowrap;
        }

        .yp-candidates-content {
            min-height: 85vh;
            display: flex;
        }

        .yp-candidates-ads-overview {
            display: flex;
            width: 100%;
            flex-flow: column nowrap;
            padding: 0 15px 40px;
            box-sizing: border-box;
        }

        .yp-candidates-title-block {
            font-size: 16px;
            font-weight: 600;
            color: #9cb2bd;
            margin: 25px 0 20px;
        }

        .yp-candidates-ads-overview .candidates {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
            padding: 0;
            list-style: none;
        }



        @media (min-width: 1023px) {
            .yp-main-content .yp-candidates-container .yp-candidates-content {
                margin: 0 auto;
                width: 100%;
                max-width: 1060px;
            }
        }

        @media (min-width: 769px) {
            .yp-candidates-ads-overview {
                padding: 15px 30px 40px;
            }
        }

        @media (min-width: 992px) {
            .yp-candidates-ads-overview .candidates li {
                width: 33.33333%;
            }
        }

        @media (min-width: 576px) {
            .yp-candidates-ads-overview .candidates li {
                width: 50%;
            }
        }

        .yp-candidates-ads-overview .candidates {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
            padding: 0;
            list-style: none;
        }

        .ad-overview {
            display: flex;
            flex-direction: column;
            background: #fff;
            border-radius: 3px;
            height: 100%;
            font-family: Nunito, Arial, Helvetica, sans-serif;
            box-shadow: 0 3px 7px 0 rgba(82, 82, 82, .05);
            border-bottom: 1px solid #f6f6f6;
        }

        .ad-overview .header {
            display: flex;
            align-items: center;
            height: 36px;
            padding: 0 15px;
            border-bottom: 1px solid #f6f6f6;
        }

        .ad-overview .content {
            position: relative;
            box-sizing: border-box;
            min-height: 120px;
            padding: 18px 15px 10px;
        }

        .ad-overview .actions {
            display: flex;
            height: 70px;
            margin-top: auto;
            border-top: 1px solid #f6f6f6;
        }

        .ad-overview .header h4 {
            margin: 0;
            color: #fa9856;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .ad-overview .header .dropdown {
            margin-left: auto;
        }

        .yp-dropdown-menu {
            position: relative;
        }

        .yp-dropdown-menu-actions {
            cursor: pointer;
        }

        svg[Attributes Style] {
            width: 20;
            height: 7;
        }

        svg:not(:root) {
            overflow-clip-margin: content-box;
            overflow: hidden;
        }

        .yp-dropdown-menu-content.hide {
            visibility: hidden;
        }

        @media (min-width: 1023px) {
            .yp-dropdown-menu-content {
                top: 20px;
                right: 0;
            }
        }



        .yp-dropdown-menu-content.hide {
            visibility: hidden;
        }

        @media (min-width: 1023px) {
            .yp-dropdown-menu-content {
                top: 20px;
                right: 0;
            }
        }

        .yp-dropdown-menu-content {
            z-index: 99;
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 0;
            visibility: visible;
            width: auto;
            box-shadow: 0 3px 7px 0 rgba(82, 82, 82, .15);
        }

        .yp-dropdown-menu-item {
            font-family: Nunito, Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #363636;
            background: #fff;
            padding: 10px;
            font-weight: 500;
            white-space: nowrap;
            text-decoration: none;
        }

        .ad-overview .content>div {
            display: flex;
            align-items: center;
            margin-bottom: 14px;
        }

        .ad-overview .content>div .title {
            max-width: 70%;
            margin: 0 15px 0 0;
            font-weight: 700;
            text-overflow: ellipsis;
            flex-grow: 1;
            white-space: nowrap;
            overflow: hidden;
        }

        h5 {
            display: block;
            font-size: 0.83em;
            margin-block-start: 1.67em;
            margin-block-end: 1.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .ad-overview .content>div .status.paused {
            background-color: #9cb2bd;
        }

        .ad-overview .content>div .status {
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 700;
            color: #fff;
            padding: 2px 9px;
            margin-left: auto;
            border-radius: 2px;
            box-sizing: border-box;
            /* background-color: #32bfa3; */
        }

        .ad-overview .content .description {
            position: relative;
            color: #363636;
            font-size: 13px;
            line-height: 1.4;
            font-weight: 400;
            margin: 0;
        }

        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .ad-overview .actions a[data-v-576fdb38] {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            flex-basis: 0;
            padding: 12px 0 0;
            text-decoration: none;
        }

        .ad-overview .actions a strong[data-v-576fdb38] {
            font-size: 18px;
            color: #363636;
            font-weight: 600;
            position: relative;
        }

        .ad-overview .actions a span[data-v-576fdb38] {
            font-size: 13px;
            line-height: 16px;
            color: #9cb2bd;
            font-weight: 500;
        }

        .ad-overview .actions a[data-v-576fdb38]:not(:last-child):after {
            content: "";
            position: absolute;
            top: 50%;
            right: 0;
            margin-top: -14px;
            height: 28px;
            width: 2px;
            background-color: #f6f6f6;
        }

        .ad-overview .actions a strong[data-v-576fdb38] {
            font-size: 18px;
            color: #363636;
            font-weight: 600;
            position: relative;
        }

        .ad-overview .actions a.has-unread strong[data-v-576fdb38]:after {
            content: "";
            position: relative;
            display: inline-block;
            top: -14px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background-color: #ff7d7d;
        }

        .ad-overview .actions a strong[data-v-576fdb38] {
            font-size: 18px;
            color: #363636;
            font-weight: 600;
            position: relative;
        }

        .yp-dropdown-menu-content {
            z-index: 99;
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 0;
            visibility: visible;
            width: auto;
            box-shadow: 0 3px 7px 0 rgba(82, 82, 82, .15);
        }

        /* .yp-dropdown-menu-item-content-href {
            font-family: Nunito, Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #363636;
            background: #fff;
            padding: 10px;
            font-weight: 500;
            white-space: nowrap;
            text-decoration: none;
        } */
    </style>


 @foreach ($annonces as $annonce)
    <div class="yp-main-content">
        <div class="yp-candidates-container" data-v-126c35e4="">
            <!---->
            <div class="yp-candidates-content">
                <div class="yp-candidates-ads-overview">
                    <!---->
                    <div class="yp-candidates-ads">
                        <h1 class="yp-candidates-title-block">
                            Your Paused Ad
                        </h1>
                        <ul class="candidates">
                            <li>
                                <section data-v-576fdb38="" class="ad-overview">
                                    <section data-v-576fdb38="" class="header">
                                        <h4 data-v-576fdb38="">Domestic help</h4>
                                        <style>
                                            .custom-link{
                                                background-color: #9cb2bd;
                                                text-decoration: none;
                                                color: #fff;
                                                padding: 2px;
                                                font-size: 14px;
                                                font-weight: 900;
                                                width: 50px;
                                                text-align: center;
                                                margin: 3px;
                                                cursor: pointer;
                                                margin-left: 0 auto;
                                            }
                                        </style>
                                   
                                        <div data-v-576fdb38="" class="dropdown">
                                            <div data-v-576fdb38="" class="yp-dropdown-menu">

                                                    

                                                {{-- <a class="btn btn-primary mt-1 mb-1"><i class="fa-solid fa-eye"></i></a>
                                                <a class="btn btn-primary p-1"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a class="btn btn-primary p-1"><i class="fa-solid fa-plug"></i></a> --}}
                                                <div class="yp-dropdown-menu-actions">

                                                    <div class="btn-group"> 
                                                        <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 50px;height: 30px;background-color: transparent;border: none;color: #9cb2bd;"><i class="fa-solid fa-bars"></i></button>
                                                        <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="{{ route('famille.addannonce') }}" style="color: #9cb2bd;"><i class="fa-solid fa-eye"></i> View</a>
                                                          <a class="dropdown-item" href="{{ route('famille.editannonce',['annonce' =>$annonce->id]) }}" style="color: #9cb2bd;"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                                          <a class="dropdown-item" href="#" style="color: #9cb2bd;"><i class="fa-solid fa-plug"></i> Reactivate</a>
                                                          {{-- <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#">Separated link</a> --}}
                                                        </div>
                                                      </div>



                                                    {{-- <a class="custom-link"><i class="fa-solid fa-eye"></i></a>
                                                    <a class="custom-link"></a>
                                                    <a class="custom-link"></a> --}}
                                                    {{-- <svg data-name="Layer 1"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.01 16.32"
                                                        width="20" height="7">
                                                        <path
                                                            d="M5.09 11.79a5 5 0 0 1-1.48-3.67 4.83 4.83 0 0 1 1.48-3.58A4.92 4.92 0 0 1 8.64 3.1a4.76 4.76 0 0 1 3.48 1.4 4.94 4.94 0 0 1 1.4 3.62 5 5 0 0 1-1.44 3.67 4.7 4.7 0 0 1-3.44 1.44 4.92 4.92 0 0 1-3.55-1.44zm14.91 0a4.91 4.91 0 0 1-1.48-3.67A4.79 4.79 0 0 1 20 4.54a4.92 4.92 0 0 1 3.58-1.44 4.72 4.72 0 0 1 3.47 1.4 4.91 4.91 0 0 1 1.41 3.62A5 5 0 0 1 27 11.79a4.7 4.7 0 0 1-3.44 1.44A4.92 4.92 0 0 1 20 11.79zm15 0a4.91 4.91 0 0 1-1.48-3.67A4.79 4.79 0 0 1 35 4.54a4.9 4.9 0 0 1 3.52-1.44A4.74 4.74 0 0 1 42 4.5a4.91 4.91 0 0 1 1.4 3.62 5 5 0 0 1-1.4 3.67 4.72 4.72 0 0 1-3.44 1.44A4.9 4.9 0 0 1 35 11.79z"
                                                            fill="#9cb2bd"></path>
                                                    </svg></div>
                                                   
                                                <div class="yp-dropdown-menu-content hide">
                                                    <div data-v-576fdb38="" class="yp-dropdown-menu-item"
                                                        datayp="link|ad-card|open|307693">
                                                        <div class="yp-drowndown-menu-item-icon-container"></div>
                                                        <div class="yp-dropdown-menu-item-content"><a href="/ad/307693"
                                                                class="yp-dropdown-menu-item-content-href">View</a></div>
                                                    </div>
                                                    <div data-v-576fdb38="" class="yp-dropdown-menu-item"
                                                        datayp="link|ad-card|edit|307693">
                                                        <div class="yp-drowndown-menu-item-icon-container"></div>
                                                        <div class="yp-dropdown-menu-item-content"><a
                                                                href="/registration/employer/307693/edit"
                                                                class="yp-dropdown-menu-item-content-href">Edit</a></div>
                                                    </div>
                                                    <div data-v-576fdb38="" class="yp-dropdown-menu-item"
                                                        datayp="link|ad-card|restore|307693">
                                                        <div class="yp-drowndown-menu-item-icon-container"></div>
                                                        <div class="yp-dropdown-menu-item-content"><a
                                                                href="/annonce/parent/restore/307693"
                                                                class="yp-dropdown-menu-item-content-href">Reactivate</a>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </section>
                                    <section data-v-576fdb38="" class="content">
                                        <div data-v-576fdb38="">
                                            <h5 data-v-576fdb38="" class="title">{{ Auth::user()->username }}</h5>
                                            <div data-v-576fdb38="" class="status paused">
                                                Paused
                                               
                                            </div>
                                        </div>
                                        <p data-v-576fdb38="" class="description">
                                            {{ $annonce->title_of_offer }}
                                            {{ $annonce->id }}
                                        </p>
                                    </section>
                                    <section data-v-576fdb38="" class="actions"><a data-v-576fdb38=""
                                            href="#" class=""
                                            datayp="link|ad-card|view-candidates|307693"><strong
                                                data-v-576fdb38="">0</strong> <span data-v-576fdb38="">
                                                New Application
                                            </span></a> <a data-v-576fdb38="" href="#"
                                            datayp="link|ad-card|view-messages|307693" class="has-unread"><strong
                                                data-v-576fdb38="">0</strong> <span data-v-576fdb38="">
                                                Conversation
                                            </span></a></section>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach()
    {{-- <div class="container" >
    <div class="row" style="margin-top:50px">
        <div class="col-md-9 offset-md-1">
            <livewire:multi-step-form />
        </div>
    </div>
</div> --}}
@endsection
