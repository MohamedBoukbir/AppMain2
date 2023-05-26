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
            display: block;
            justify-content: center;
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
            display: block;
            justify-content: center;
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
            font-weight: 900;
            text-overflow: ellipsis;
            flex-grow: 1;
            white-space: nowrap;
            overflow: hidden;
        }

        h5 {
            display: block;
            font-size: 1em;
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



    <div class="yp-main-content">
        <div class="yp-candidates-container">
            <!---->
            <div class="yp-candidates-content">
                <div class="yp-candidates-ads-overview">
                    <!---->
                    <div class="yp-candidates-ads">

                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h1 class="yp-candidates-title-block">Your annonces</h1>
                            <div style="margin-left: auto;">
                                <a class="btn btn-success text text-light" href="{{ route('famille.addannonce') }}"><i
                                        class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        {{-- <div style="display: flex;background-color: red;">
                            <h1 class="yp-candidates-title-block">Your Paused Ad</h1>
                            <button class="text-right">ok</button>
                        </div> --}}
                        @foreach ($annonces as $annonce)
                            <ul style="margin-top: 10px;">
                                <li>
                                    <section data-v-576fdb38="" class="ad-overview">
                                        <section data-v-576fdb38="" class="header">
                                            <h4 data-v-576fdb38="">Domestic help</h4>
                                            <style>
                                                .custom-link {
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


                                                    <div class="yp-dropdown-menu-actions">

                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"
                                                                style="width: 50px;height: 30px;background-color: transparent;border: none;color: #9cb2bd;"><i
                                                                    class="fa-solid fa-bars"></i></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                                    data-target="#ModalShow{{ $annonce->id }}"
                                                                    style="color: #9cb2bd;">
                                                                    <i class="fa-solid fa-eye"></i> View</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('famille.editannonce', ['annonce' => $annonce->id]) }}"
                                                                    style="color: #9cb2bd;"><i
                                                                        class="fa-solid fa-pen-to-square"></i> Edit</a>

                                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                                    data-target="#ModalDelete{{ $annonce->id }}"
                                                                    style="color: #9cb2bd;">
                                                                    <i class="fa-solid fa-trash"></i> Delete</a>
                                                                @if ($annonce->status == 'Active')
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('famille.activeannonce', ['status' => $annonce->status, 'id_annonce' => $annonce->id]) }}"
                                                                        style="color: #9cb2bd;"><i
                                                                            class="fa-solid fa-pause"></i>
                                                                        Pause</a>
                                                                @else
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('famille.activeannonce', ['status' => $annonce->status, 'id_annonce' => $annonce->id]) }}"
                                                                        style="color: #9cb2bd;"><i
                                                                            class="fa-solid fa-plug"></i>
                                                                        Reactivate</a>
                                                                @endif



                                                            </div>
                                                        </div>
                                                        {{-- MODAL VIEW --}}

                                                        <div class="modal fade text-left" id="ModalShow{{ $annonce->id }}"
                                                            tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">
                                                                            {{ __('Detailles de l\'annonce') }}</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <Span aria-hidden="true">&times;</Span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <div
                                                                                            style="background-color: #f49758;padding: 15px;border-radius: 5px; 
                                                                                            display: flex;
                                                                                            align-items: center;
                                                                                            justify-content: center;
                                                                                            text-align: center;color: #FFF;font-weight: 900;min-height: 100px;">
                                                                                            FAMILY INFORMATIONS</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Under 3
                                                                                            years old</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                           
                                                                                            value="{{ $annonce->child_baby }}"
                                                                                            disabled style="color: #808080;;">
                                                                                      
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Between
                                                                                            3 and 6 Yo</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            
                                                                                            value="{{ $annonce->child_kid }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">7
                                                                                            years old and up</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                          
                                                                                            value="{{ $annonce->child_boy }}"
                                                                                            disabled style="color: #808080;;">
                                                                                      
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Type
                                                                                            of Employment</label>
                                                                                        <input type="text"
                                                                                            class="form-control "
                                                                                             value="{{ $annonce->type_of_employment }}"
                                                                                            disabled style="color: #808080;;">
                                                                                      
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <div class="mt-5"
                                                                                            style="background-color: #f49758;padding: 15px;border-radius: 5px; 
                                                                                            display: flex;
                                                                                            align-items: center;
                                                                                            justify-content: center;
                                                                                            text-align: center;color: #FFF;font-weight: 900;min-height: 100px;">
                                                                                            RECOMMANDATION</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Expected
                                                                                            start date</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                           
                                                                                            value="{{ $annonce->expected_start_date }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Day
                                                                                            off</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            
                                                                                            value="{{ $annonce->day_off }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Accommodation</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                           
                                                                                            value="{{ $annonce->accommodation }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Living
                                                                                            arrangement</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                           
                                                                                            value="{{ $annonce->living_arrangement }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <div class="mt-5"
                                                                                            style="background-color: #f49758;padding: 15px;border-radius: 5px; 
                                                                                            display: flex;
                                                                                            align-items: center;
                                                                                            justify-content: center;
                                                                                            text-align: center;color: #FFF;font-weight: 900;min-height: 100px;">
                                                                                            OFFER</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Title
                                                                                            of my offer</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                          
                                                                                            value="{{ $annonce->title_of_offer }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="form-group">
                                                                                        <label for="">Define your needs</label>
                                                                                        <textarea class="form-control customtextarea" rows="6"
                                                                                          disabled style="color: #808080;font-size: 15px;">{{ $annonce->define_needs }}"</textarea>
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Nationality</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                         
                                                                                            value="{{ $annonce->country }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Address</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                           
                                                                                            value="{{ $annonce->address }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Phone
                                                                                            number</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                          
                                                                                            value="{{ $annonce->phone }}"
                                                                                            disabled style="color: #808080;;">
                                                                                      
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <div class="mt-5"
                                                                                            style="background-color: #f49758;padding: 15px;border-radius: 5px; 
                                                                                            display: flex;
                                                                                            align-items: center;
                                                                                            justify-content: center;
                                                                                            text-align: center;color: #FFF;font-weight: 900;min-height: 100px;">
                                                                                            HELPER </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Nationality</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                          
                                                                                            value="{{ $annonce->helper_nationality }}"
                                                                                            disabled style="color: #808080;;">
                                                                                        <span class="text-danger">
                                                                                            @error('title_of_offer')
                                                                                                {{ $message }}
                                                                                            @enderror
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Gender</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            
                                                                                            value="{{ $annonce->gender }}"
                                                                                            disabled style="color: #808080;;">
                                                                                      
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Religion</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                           
                                                                                            value="{{ $annonce->religion }}"
                                                                                            disabled style="color: #808080;;">
                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Minimum education level</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                          
                                                                                            value="{{ $annonce->education_level }}"
                                                                                            disabled style="color: #808080;;">
                                                                            
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Contract situation</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                          
                                                                                            value="{{ $annonce->contract_situation }}"
                                                                                            disabled style="color: #808080;;">
                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">Monthly salary</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                           
                                                                                            value="{{ $annonce->monthly_salary }}"
                                                                                            disabled style="color: #808080;;">
                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for=""
                                                                                            class="font-weight-bold">
                                                                                            Currency</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            
                                                                                            value="{{ $annonce->currency_coin }}"
                                                                                            disabled style="color: #808080;;">
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- <div class="row mb-4">
                                                                                <label class="col-sm-3 col-label-form"><b>Image
                                                                                        d'etudiant</b></label>
                                                                                <div class="col-sm-9">
                                                                                    <img src="{{ asset('images/' . $annonce->student_image) }}"
                                                                                        width="200"
                                                                                        class="img-thumbnail" />
                                                                                </div>
                                                                            </div> --}}
                                                                            {{-- <div class="row mb-3">
                                                                                <label
                                                                                    class="col-sm-3 col-label-form"><b>C.I.N</b></label>
                                                                                <div class="col-sm-12">
                                                                                    <input type="text"
                                                                                        value="{{ $annonce->title_of_offer }}"
                                                                                        class="form-control" disabled>
                                                                                </div>
                                                                            </div> --}}

                                                                            <div class="text-center">
                                                                                <button type="button"
                                                                                    class="btn btn-primary close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    {{ __('Close') }}
                                                                                </button>



                                                                                {{-- <button type="button"
                                                                                    class="btn btn-primary"> {{ __('Close') }}</button> --}}
                                                                            </div>
                                                                        </div> {{-- - --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        {{-- END MODAL VIEW --}}
                                                        {{-- MODAL DELETE --}}
                                                        <div class="modal fade" id="ModalDelete{{ $annonce->id }}"
                                                            tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form
                                                                        action="{{ route('annonce.destroye', $annonce->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        {{ method_field('delete') }}
                                                                        {{ csrf_field() }}
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">
                                                                                {{ __('Supprimer l\'annonce') }}</h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <Span aria-hidden="true">&times;</Span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Voulez-vous supprimer l'annonce
                                                                            <b>{{ $annonce->title_of_offer }}</b>?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn gray btn-outline-secondary"
                                                                                data-dismiss="modal">{{ __('Anuller') }}</button>
                                                                            <button type="submit"
                                                                                class="btn gray btn-outline-danger">{{ __('Supprimer') }}</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- END MODAL DELETE --}}
                                                    </div>
                                                </div>
                                        </section>
                                        <section class="content">
                                            <div data-v-576fdb38="">
                                                <h5 data-v-576fdb38="" class="title">{{ $annonce->title_of_offer }}</h5>
                                                @if ($annonce->status == 'Active')
                                                    <div class="status paused" id="status"
                                                        style="background-color: green;">
                                                        {{ $annonce->status }}
                                                    </div>
                                                @else
                                                    <div class="status paused" id="status"
                                                        style="background-color: red;">
                                                        {{ $annonce->status }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="description" style="overflow: auto;">
                                                {{-- <?php
                                                $string = $annonce->define_needs;
                                                $chunkSize = 100; // Nombre de caractères par morceau
                                                $chunks = str_split($string, $chunkSize);
                                                // Affichage des morceaux
                                                foreach ($chunks as $chunk) {
                                                    echo $chunk . '<br>';
                                                }
                                                ?> --}}
                                                {{ $annonce->define_needs }}
                                            </div>
                                        </section>
                                        <section data-v-576fdb38="" class="actions"><a data-v-576fdb38="" href="#"
                                                class="" datayp="link|ad-card|view-candidates|307693"><strong
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
                        @endforeach()
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
