@extends('front.account')


@section('item-list-1')
    <p class="menu-item-label">Dashboard</p>
@endsection

@section('item-list-2')
    <p class="menu-item-label">New Applications</p>
@endsection

@section('item-list-3')
    <p class="menu-item-label">Conversations</p>
@endsection

@section('item-list-4')
    <p class="menu-item-label" style="color: #144862!important;">Saved profiles</p>
@endsection



@section('content')
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
        integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"
        integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <style>
        .btn-upgrade {
            width: 15%;
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
    <style>
        .form-group select,
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="date"],
        .form-group input[type="number"] {
            width: 100%;
            height: 70px;
            border: 1px solid rgba(235, 236, 241, 1);
            padding: 0 30px;
            font-size: 15px;
            color: #000000;
            border-radius: 5px;
        }
    </style>

    <section class="featured-places mb-5" id="blog" style="background-color: #fff;">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($likeds) > 0)
                    @foreach ($likeds as $liked)
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="featured-item">
                                <div class="thumb">
                                    {{-- ! image --}}


                                    @if ($liked->image)
                                        <img src="/storage/{{ $liked->image }}" alt="" style="height: 250px;">
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($liked->username) }}"
                                            alt="" style="height: 250px;">
                                    @endif
                                    {{-- ! end image --}}

                                </div>
                                <div class="down-content ">
                                    <div class="overlay-content " style="display: flex;justify-content: space-between;">
                                        <h4>{{ $liked->username }}</h4>
                                        <div style="display: flex">

                                            {{-- ! switch --}}
                                            @switch($liked->rate)
                                                @case(1)
                                                    <ul style="display: flex;margin-right: 10px;">
                                                        <li><i class="fa fa-star text-warning "></i></li>
                                                        <li><i class="fa fa-star "></i></li>
                                                        <li><i class="fa fa-star "></i></li>
                                                    </ul>
                                                @break

                                                @case(2)
                                                    <ul style="display: flex;margin-right: 10px;">
                                                        <li><i class="fa fa-star text-warning"></i></li>
                                                        <li><i class="fa fa-star text-warning "></i></li>
                                                        <li><i class="fa fa-star "></i></li>
                                                    </ul>
                                                @break

                                                @case(3)
                                                    <ul style="display: flex;margin-right: 10px;">
                                                        <li><i class="fa fa-star text-warning"></i></li>
                                                        <li><i class="fa fa-star text-warning"></i></li>
                                                        <li><i class="fa fa-star text-warning "></i></li>
                                                    </ul>
                                                @break

                                                @default
                                                    <ul style="display: flex;margin-right: 10px;">
                                                        <li><i class="fa fa-star "></i></li>
                                                        <li><i class="fa fa-star "></i></li>
                                                        <li><i class="fa fa-star "></i></li>
                                                    </ul>
                                            @endswitch

                                            {{-- ! switch --}}
                                        </div>
                                    </div>


                                    <div class="overlay-content " style="display: flex;justify-content: space-between;">

                                        <div style="display: flex;justify-content: start;">



                                            @if ($liked->babysitter)
                                                <span
                                                    class="badge rounded-pill text-bg-success ms-1">{{ $liked->babysitter }}</span>
                                            @endif



                                            @if ($liked->childminder)
                                                <span
                                                    class="badge rounded-pill text-bg-danger ms-1">{{ $liked->childminder }}</span>
                                            @endif
                                            @if ($liked->nanny)
                                                <span
                                                    class="badge rounded-pill text-bg-warning text-light ms-1">{{ $liked->nanny }}</span>
                                            @endif
                                            @if ($liked->maid)
                                                <span
                                                    class="badge rounded-pill text-bg-secondary text-light ms-1">{{ $liked->maid }}</span>
                                            @endif

                                        </div>
                                        <div style="display: table-column">
                                            <span>{{ $liked->country }}</span>
                                        </div>
                                    </div>
                                    <p>{{ $liked->title_of_offer }}</p>

                                    <div class="row">
                                        <div class="col-md-12 p-1">
                                            <div class="text-button">
                                                <a href="{{ route('sendeto', $liked->id) }}"
                                                    class="bg-light text-success">Contact</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p style="margin: 300px; font-size: 80px">liked</p>
                @endif
            </div>
        </div>
    </section>





@endsection
